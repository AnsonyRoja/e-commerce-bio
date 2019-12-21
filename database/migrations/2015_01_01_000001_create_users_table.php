<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('last_ip')->nullable(false);
            $table->datetime('last_activity')->nullable(false);
            $table->integer('failed_attempts')->default(0);
            $table->bigInteger('people_id')->unsigned();
            $table->bigInteger('group_id')->unsigned();
            $table->bigInteger('currency_id')->unsigned();
            $table->integer('purchase_quantity')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('people_id')->references('id')->on('peoples')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('group_id')->references('id')->on('groups')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('currency_id')->references('id')->on('currencies')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
