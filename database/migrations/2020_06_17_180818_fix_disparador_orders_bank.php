<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixDisparadorOrdersBank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        DROP TRIGGER IF EXISTS det_bank_orders ON det_bank_orders;
        DROP FUNCTION IF EXISTS det_bank_orders();


        CREATE OR REPLACE FUNCTION det_bank_orders()
                RETURNS trigger AS
              $$
            DECLARE
                    v_orders_status_id INTEGER:= (SELECT orders_status_id FROM trackings WHERE id=(SELECT MAX(t.id) FROM trackings t WHERE t.orders_id=NEW.orders_id));
                    v_diferencia_aceptable FLOAT:= (SELECT other_amount FROM det_bank_orders WHERE orders_id=NEW.orders_id LIMIT 1);
                    v_total_monto_aprobado_o_efectivo FLOAT := (SELECT SUM(amount)+v_diferencia_aceptable FROM det_bank_orders WHERE orders_id=NEW.orders_id and (status='aprobado' OR status='efectivo') GROUP BY orders_id);  
                    v_total_a_pagar FLOAT:=(SELECT total_pay FROM orders WHERE id=NEW.orders_id);
                    v_users_id INTEGER:=NEW.users_id;
                    v_users_id_orden INTEGER:=(SELECT u.id FROM orders o INNER JOIN users u ON u.id=o.users_id WHERE o.id=NEW.orders_id);
                    v_payments_methods_id INTEGER:=(SELECT payment_methods_id FROM bank_datas WHERE id=NEW.bank_datas_id);
                    v_email VARCHAR:=(SELECT u.email FROM orders o INNER JOIN users u ON u.id=o.users_id WHERE o.id=NEW.orders_id);
                    v_tiempo_pago INTEGER:=(SELECT pm.time_minutes FROM bank_datas bd INNER JOIN payment_methods pm ON pm.id=bd.payment_methods_id WHERE bd.id=NEW.bank_datas_id);
                    v_saldo_a_favor FLOAT:=(((v_total_monto_aprobado_o_efectivo-v_total_a_pagar)/(SELECT rate FROM coins WHERE id=1))-0.01);
              BEGIN	
              IF(TG_OP='INSERT') THEN
                IF(v_payments_methods_id=5) THEN
                  INSERT INTO biowallets (monto,email,orders_id,created_at,tipo) VALUES ((NEW.amount/(SELECT rate FROM coins WHERE id=1))*-1,v_email,NEW.orders_id,NOW(),'Aprobado');
                END IF;
              END IF;
                IF(v_payments_methods_id=5 AND NEW.status='rechazado') THEN
                  UPDATE biowallets SET tipo='Rechazado',updated_at=NOW() WHERE orders_id=NEW.orders_id;
                END IF;
                IF(v_saldo_a_favor>0 AND v_orders_status_id=1 AND v_payments_methods_id=3) THEN
                  INSERT INTO biowallets (monto,email,orders_id,created_at) VALUES (v_saldo_a_favor,v_email,NEW.orders_id,NOW());
                END IF;
                    IF (NEW.status='aprobado' OR v_tiempo_pago=0) AND (v_total_monto_aprobado_o_efectivo>=v_total_a_pagar) THEN
                          INSERT INTO trackings (description,orders_id,orders_status_id,users_id,created_at) VALUES (NEW.description,NEW.orders_id,4,v_users_id,NOW());
                      UPDATE orders SET status='PR' WHERE orders.id=NEW.orders_id;
                  END IF;
                    IF NEW.status='rechazado' THEN
                        INSERT INTO trackings (description,orders_id,orders_status_id,users_id,created_at) VALUES (NEW.description,NEW.orders_id,1,v_users_id,NOW());
                    END IF;
             
             
             
                  RETURN NEW;
              END;
        $$
        LANGUAGE 'plpgsql';   
        
        CREATE TRIGGER det_bank_orders
                AFTER INSERT OR UPDATE
                ON det_bank_orders
                FOR EACH ROW
                EXECUTE PROCEDURE det_bank_orders();                  
      ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('det_banks_orders', function (Blueprint $table) {
            //
        });
    }
}