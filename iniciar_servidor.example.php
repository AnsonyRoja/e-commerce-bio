<?php
//ini_set('max_execution_time', '600');
error_reporting(E_ALL ^E_NOTICE ^E_DEPRECATED);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;		
openlog("Biomercados",LOG_PERROR, LOG_DAEMON);
syslog(LOG_INFO,"Servidor iniciado");
date_default_timezone_set('America/Manaus');
$a=extraer_datos_db();
$con=conectar_db($a['host'],$a['database'],$a['user'],$a['password'],$a['port']);

$retraso_general=60;
//$ip="http://192.168.42.75"; //local
$ip="200.74.230.206:9009";


$activar_productos		=true;
$activar_envio_orden	=true;
$activar_email_tracking	=true;
$activar_tasa			=true;
$activar_delivery		=true;
$activar_paga_rapido	=true; //apura al usuario que pague despues de 1 hora
$activar_correo_masivo	=true; 

$tiempo_acumulado_productos=0;
$retraso_productos="+2 minutes";



$tiempo_acumulado_envio_orden=0;
$retraso_envio_orden="+2 minutes";


$tiempo_acumulado_email_tracking=0;
$retraso_email_tracking="+2 minutes";


$tiempo_acumulado_tasa=0;
$retraso_tasa="+2 minutes";


$tiempo_acumulado_delivery=0;
$retraso_delivery="+2 minutes";


$tiempo_acumulado_paga_rapido=0;
$retraso_paga_rapido="+2 minutes";

$tiempo_acumulado_correo_masivo=0;
$retraso_correo_masivo="+2 minutes";





/* Ejemplo si quieren crear otro :)
$activar_productosb=true;
$tiempo_acumulado_productosb=0;
$retraso_productosb="+5 minutes";
*/

do{
	if(time()>=$tiempo_acumulado_paga_rapido and $activar_paga_rapido==true){
		syslog(LOG_INFO,"Actualizando paga_rapido");
		$tiempo_inicio = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		paga_rapido();
		$tiempo_fin = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio)."\n"; //Opcional para medir el tiempo de ejecución del algoritmo
		$tiempo_acumulado_paga_rapido=strtotime($retraso_paga_rapido);		
	}	
	if(time()>=$tiempo_acumulado_email_tracking and $activar_email_tracking==true){
		syslog(LOG_INFO,"Actualizando email_tracking");
		$tiempo_inicio = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		email_tracking();
		$tiempo_fin = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio)."\n"; //Opcional para medir el tiempo de ejecución del algoritmo
		$tiempo_acumulado_email_tracking=strtotime($retraso_email_tracking);		
	}	

	if(time()>=$tiempo_acumulado_productos and $activar_productos==true){
		syslog(LOG_INFO,"Actualizando Productos");
		$tiempo_inicio = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		actualizarProductos($ip);
		$tiempo_fin = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio)."\n"; //Opcional para medir el tiempo de ejecución del algoritmo
		$tiempo_acumulado_productos=strtotime($retraso_productos);		
	}	

	if(time()>=$tiempo_acumulado_envio_orden and $activar_envio_orden==true){
		syslog(LOG_INFO,"Actualizando envio_orden");
		$tiempo_inicio = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		actualizarEnvioOrden($ip);
		$tiempo_fin = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio)."\n"; //Opcional para medir el tiempo de ejecución del algoritmo
		$tiempo_acumulado_envio_orden=strtotime($retraso_envio_orden);		
	}	
	if(time()>=$tiempo_acumulado_tasa and $activar_tasa==true){
		syslog(LOG_INFO,"Actualizando tasa");
		$tiempo_inicio = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		actualizarTasa($ip);
		$tiempo_fin = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio)."\n"; //Opcional para medir el tiempo de ejecución del algoritmo
		$tiempo_acumulado_tasa=strtotime($retraso_tasa);		
	}	
	if(time()>=$tiempo_acumulado_delivery and $activar_delivery==true){
		syslog(LOG_INFO,"Actualizando delivery");
		$tiempo_inicio = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		actualizarDelivery($ip);
		$tiempo_fin = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio)."\n"; //Opcional para medir el tiempo de ejecución del algoritmo
		$tiempo_acumulado_delivery=strtotime($retraso_delivery);		
	}	
	if(time()>=$tiempo_acumulado_correo_masivo and $activar_correo_masivo==true){
		syslog(LOG_INFO,"Actualizando correo masivo");
		$tiempo_inicio = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		actualizarCorreoMasivo();
		$tiempo_fin = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio)."\n"; //Opcional para medir el tiempo de ejecución del algoritmo
		$tiempo_acumulado_correo_masivo=strtotime($retraso_correo_masivo);		
	}		


sleep($retraso_general);

}while(true);
closelog();


function actualizarCorreoMasivo(){
	$arrb=q("SELECT text FROM servicios WHERE tipo='correo_masivo' ORDER BY id desc LIMIT 1");
	if(is_array($arrb)){
		$textoCorreo=$arrb[0]['text'];
		$arr=q("SELECT email FROM subscriptions WHERE enviado=0");
		if(is_array($arr)){
			foreach($arr as $obj){
				$arrCorreo[]= $obj['email'];
			}
	
			enviarCorreo($arrCorreo,"Noticias Biomercados",$textoCorreo,true);
			q("UPDATE subscriptions SET enviado=1");
		}
	}
}

function paga_rapido(){
	$arra=q("SELECT titulo,body FROM pages WHERE id='6' AND status='A'");
	$arr=q("SELECT u.email, o.created_at,o.id,o.id as orders_id FROM orders o INNER JOIN users u ON u.id=o.users_id WHERE status='NU' AND email_pay_speed ISNULL");
	
	if(is_array($arr)){
		
		
		
		foreach($arr as $v){
		
			if(strtotime($v['created_at'])<=strtotime("-60 minutes")){
				$titulo=agregarVariables($arra[0]['titulo'],$v);
				$body=agregarVariables($arra[0]['body'],$v);
				if(enviarCorreo($v['email'],$titulo,$body)){			
					$id=$v['id'];
					q("UPDATE orders SET email_pay_speed=1 WHERE id=$id");
				}
			}
		}

	}

}

function actualizarDelivery($ip){
	$url_prueba="http://ecommerce:2ViGiPJ1DAElzDwEteBbiIH4gF939fKuOD5GKRhedZp@200.74.230.206:9009/api/v1/getDelivery";
	$url="http://ecommerce:2ViGiPJ1DAElzDwEteBbiIH4gF939fKuOD5GKRhedZp@$ip/api/v1/getDelivery";
	
	$data=leer("Delivery",$url);
	
	if($data!=false){
		
			if($data->price>0){
				$price=$data->price;
				q("UPDATE transports SET price='$price' WHERE id=2");
			}
		
	}
}
function actualizarTasa($ip){
	$url_prueba="http://ecommerce:2ViGiPJ1DAElzDwEteBbiIH4gF939fKuOD5GKRhedZp@200.74.230.206:9009/api/v1/getTax";
	$url="http://ecommerce:2ViGiPJ1DAElzDwEteBbiIH4gF939fKuOD5GKRhedZp@$ip/api/v1/getTax";
	
	$data=leer("Tasa dolar",$url);

	if($data!=false){
			if($data->Tax>0){
				
				$rate=$data->Tax;
				q("UPDATE coins SET rate='$rate' WHERE id=1");
			}
		
	}
}

function email_tracking(){
	$arra=q("SELECT titulo,body FROM pages WHERE id='5' AND status='A'");

	$arr=q("SELECT oe.id as order_status,t.id, t.description, oe.name as status,u.email,t.orders_id  FROM trackings t INNER JOIN orders_status oe ON oe.id=t.orders_status_id INNER JOIN users u ON u.id=t.users_id WHERE t.enviado_email=0");
	
	if(is_array($arr) and is_array($arra)){

		foreach($arr as $obj){
			$id=$obj['id'];
			if($obj['order_status']==6){
				q("UPDATE trackings SET enviado_email=1 WHERE id='$id'");
			}else{
				
				
				$titulo=agregarVariables($arra[0]['titulo'],$obj);
				$body=agregarVariables($arra[0]['body'],$obj);
				if(enviarCorreo($obj['email'],$titulo,$body)){
					q("UPDATE trackings SET enviado_email=1 WHERE id='$id'");
		
				}elseif(enviarCorreo($obj['email'],$titulo,$body)){
					q("UPDATE trackings SET enviado_email=1 WHERE id='$id'");
				}else{
					sleep(5);
					enviarCorreo($obj['email'],$titulo,$body);
					q("UPDATE trackings SET enviado_email=1 WHERE id='$id'");
					
				}
			}
		}
		
	}
}

function agregarVariables($texto,$variables){

	foreach($variables as $name=>$var){
	
		$texto = str_replace("{{$name}}", $var, $texto);
		
	}
	return $texto;
}

function actualizarEnvioOrden($ip){
	$arr=q("SELECT localidad,norder,envio,sub_total,exento,base_imponible,iva,total,rif,direccion_de_entrega,direccion_b,descripcion,telefono,fecha_de_orden,fecha_para_entrega,orderlines,detallepago, (CASE WHEN k.direccion_a='' THEN 'Valencia' ELSE k.direccion_a END) as  direccion_a from (SELECT *, (CASE WHEN direccion_habitacion IS NULL THEN direccion_de_entrega else direccion_habitacion END) as direccion_a FROM (SELECT 
	'T06' as localidad,
	o.id as norder,
	o.total_transport as envio,
	o.sub_total,
	o.exento,
	o.bi as base_imponible,
	o.total_tax as iva,
	o.total_pay as total,
	p.rif as rif,
	concat_ws(', ', 'Valencia, Zipcode:' || oa.zip_code, oa.urb,oa.sector,'#' || oa.nro_home,oa.reference_point) AS direccion_de_entrega,
	(SELECT concat_ws(', ', 'Valencia, Zipcode:' || oa.zip_code, oa.urb,oa.sector,'#' || oa.nro_home,oa.reference_point) FROM public.order_address oa where type='habitacion' AND users_id=t.users_id) as direccion_habitacion,
	'Carabobo' AS direccion_B,
	p.name as descripcion,
	p.phone as telefono,
	TO_CHAR(o.created_at, 'dd/mm/yyyy HH12:MI AM') AS fecha_de_orden,
	TO_CHAR(o.delivery_time_date, 'dd/mm/yyyy HH12:MI AM') AS fecha_para_entrega,
	(SELECT json_agg(
				json_build_object(
				'sku', TO_CHAR(p.sku,'fm000000'), 
				'cant', op.cant,
				'nombre',p.name,
				'precio',op.price,
				'peso',p.peso,
				'peso_total',(p.peso*op.cant),
				'total',(op.price*op.cant),
				'iva',ROUND(((op.total/op.price)-1)*100)
			)
			
	) FROM order_products op INNER JOIN products p ON p.id=op.products_id WHERE op.orders=o.id) orderlines,
	(SELECT json_agg(
				json_build_object(
				'method', pm.name, 
				'mount', dbo.amount,
				'id_trans',dbo.id,
				'referencia',dbo.ref,
				'payment_status',dbo.status
			)
			
	) FROM det_bank_orders dbo INNER JOIN bank_datas bd ON bd.id=dbo.bank_datas_id INNER JOIN payment_methods pm ON pm.id=bd.payment_methods_id WHERE dbo.orders_id=o.id) detallepago 
	
	FROM (SELECT o.*,MAX(t.id) as t_id FROM orders o INNER JOIN trackings t ON t.orders_id=o.id GROUP BY o.id) o INNER JOIN trackings t ON t.id=o.t_id INNER JOIN orders_status os ON os.id=t.orders_status_id LEFT JOIN order_address oa ON oa.id=o.order_address_id INNER JOIN users ON o.users_id=users.id INNER JOIN peoples p ON p.id=users.peoples_id WHERE t.orders_status_id=4 AND o.enviado_bio=0) y) k");
	
	if(is_array($arr)){
		echo "Enviado Nueva orden";
		$data['data']=$arr;
		//print_r($arr); exit();
		foreach($arr as $index=>$obj){
			
			$data['data'][$index]['orderlines']=json_decode($obj['orderlines']);
			$data['data'][$index]['detallepago']=json_decode($obj['detallepago']);
		}
		$data['data']=json_encode($data['data']);
	//$res=send_url($data,"http://ecommerce:2ViGiPJ1DAElzDwEteBbiIH4gF939fKuOD5GKRhedZp@200.74.230.206:9009/api/v1/setOrders");
	$res=send_url($data,"http://ecommerce:2ViGiPJ1DAElzDwEteBbiIH4gF939fKuOD5GKRhedZp@$ip/api/v1/setOrders");
	
	//$res=true;
	if($res!=true){
		echo "Error al enviar la orden al servidor de bio";
	}elseif($res==true){
		
		q("BEGIN");
		$malo=false;
		foreach($arr as $orden){
			$id=$orden['norder'];
			$sql="UPDATE orders SET fecha_enviado_bio=NOW(),enviado_bio=1 WHERE id='$id' RETURNING id";
			$r=q($sql);

			if(!is_array($r)){
				$malo=true;
			}
		}
		if($malo==true){
			q("ROLLBACK");
		}else{
			q("COMMIT");
		}
	}
}

}


function actualizarProductos($ip){
	$malo=false;
	//syslog(LOG_INFO, "Prueba de memoria: " . memory_get_usage(true));
	//$url_productos="$ip/example_api_bio/getProducts.json";
	$memo=array(); //para guardar lo que ya existe y no consulte de nuevo la db por cada producto(impuestos)
	//$url_productos="http://dortiz:aluTQYPY2lpOZdTAXscAI1FXZMIgZecPoawXhDWg7Kp@200.74.230.206:9009/api/v1/getProducts";
	$url_productos="http://ecommerce:2ViGiPJ1DAElzDwEteBbiIH4gF939fKuOD5GKRhedZp@$ip/api/v1/getProducts";
	
	$data=leer("Productos",$url_productos);
	
	if($data!=false){
	
		$arr=q("SELECT id,nro_tienda FROM stores");
		$tienda=crearArreglo($arr);
		
		if(is_array($arr)){
			$todoProducto=array(); //para inactivar o activar lo que exista o no exista
			q("BEGIN");
			procesarSubCategoriasYcategorias($data->item);
			foreach($data->item as $obj){

//				if($obj->ad_org_id==1000032){
				if($obj->ad_org_id==1000004){
					$todoProducto['sku_idempiere'][intval($obj->sku)]=true;
					$sugerido=$obj->sugerido;
					if($sugerido<0){
						$sugerido=0;
					}else{
						$porcentaje_traer_global=1;
						$sugerido=round($sugerido*$porcentaje_traer_global);
					}
					if($obj->isecommerce=='N'){
						$estatusProducto='I';
					}else{
						$estatusProducto='A';
					}
				if(isset($obj->item_name) and $obj->pricelist>0 and $obj->ad_org_id){

					//------------IMPUESTOS--------------------
					if(!isset($memo[$obj->IMPUESTO]) and $obj->IMPUESTO>0){
						$nombre_impuesto=$obj->TaxType." ".$obj->IMPUESTO;

						$sql="SELECT id FROM taxes WHERE value='$obj->IMPUESTO'";
						
						$arr=q($sql);
						if(!is_array($arr)){
							$sql="INSERT INTO taxes (short_name,name,value,type,created_at) VALUES ('$nombre_impuesto','$nombre_impuesto','$obj->IMPUESTO','porc',NOW()) RETURNING id";
							$arr=q($sql);
							if(!is_array($arr)){
								echo "ERROR: ".$sql;
							}
							$taxes_id=$arr[0]['id'];
							$taxes_idb[$obj->IMPUESTO]=$arr[0]['id'];
						}else{
							$taxes_id=$arr[0]['id'];
							$taxes_idb[$obj->IMPUESTO]=$arr[0]['id'];
						}
						$memo[$obj->IMPUESTO]=true;
					}
					if($obj->IMPUESTO>0){
						$taxes_id=$taxes_idb[$obj->IMPUESTO];
					}else{
						$taxes_id=null;
					}




					//echo $obj->ad_org_id." $obj->organizacion $obj->sku $obj->sugerido\n";
					//echo $obj->sku."\n";
					$tienda_id=$tienda[$obj->ad_org_id];
					$sql="SELECT id,porc_stock FROM products WHERE sku=$obj->sku and stores_id=$tienda_id";
					//echo " Consultando: ".$sql."\n";
					$arr=q($sql);

					if($obj->bsca_netweight>0){
						$peso=$obj->bsca_netweight/1000;
					}else{
						$peso=0;
					}
					
					
					if(is_array($arr)){
						$products_id=$arr[0]['id'];
						$porc_stock=$arr[0]['porc_stock'];
						
						$sugerido=round(($porc_stock*$sugerido)/100);
						//verificar que el producto no este en un proceso de compra sin ser enviado a idempiere
						if(is_array(q("SELECT op.products_id FROM order_products op INNER JOIN orders o ON o.id=op.orders WHERE o.status='NU' AND products_id='$products_id'"))){
							$sql="UPDATE products SET peso='$peso', price='$obj->pricelist',name='".pg_escape_string($obj->item_name)."', stores_id='$tienda_id', status='$estatusProducto' WHERE sku=$obj->sku and stores_id=$tienda_id RETURNING id";
						}else{
							$sql="UPDATE products SET peso='$peso', price='$obj->pricelist',name='".pg_escape_string($obj->item_name)."', qty_avaliable='$sugerido', stores_id='$tienda_id', status='$estatusProducto' WHERE sku=$obj->sku and stores_id=$tienda_id RETURNING id";
						}
							//exit($sql);
							$valido=q($sql);
							$msj="error al actualizar! ID: $obj->m_product_id SQL: ".$sql;
					
						

					}else{
						$sql="INSERT INTO products (peso,sku,name,description_short,price,qty_avaliable,stores_id,created_at,updated_at) VALUES ('$peso',$obj->sku,'".pg_escape_string($obj->item_name)."','".pg_escape_string($obj->item_name)."','$obj->pricelist','$sugerido',$tienda_id,NOW(),NOW()) RETURNING id";
						
						$valido=q($sql);
						$products_id=$valido[0]['id'];
						$msj="error al insertar! ID: $obj->m_product_id SQL: ".$sql;
					}
					
					if(!is_array($valido)){
						
						msj($msj);
						echo $msj;
						break;
						$malo=true;
					}
//--------------IMPUESTOS-----------
$sql="SELECT t.id,t.value FROM det_product_taxes dpt INNER JOIN taxes t ON t.id=dpt.taxes_id WHERE products_id='$products_id'";

$arr=q($sql);


if(!is_array($arr) && $obj->IMPUESTO>0){
	$arr=q("INSERT INTO det_product_taxes (taxes_id,products_id) VALUES ('$taxes_id','$products_id')");
}else{
	
	if($obj->IMPUESTO==0 and $arr[0]['value']>0){
		q("DELETE FROM det_product_taxes WHERE products_id='$products_id'");
	}elseif($obj->IMPUESTO!=$arr[0]['value']){
		$sql="DELETE FROM det_product_taxes WHERE products_id='$products_id'";
			q($sql);
			if($obj->IMPUESTO>0){
				$arr=q("INSERT INTO det_product_taxes (taxes_id,products_id) VALUES ('$taxes_id','$products_id')");
			}
		}elseif($obj->IMPUESTO>0 and $obj->IMPUESTO!=$arr[0]['value']){
				q("UPDATE det_product_taxes SET taxes_id='$taxes_id' WHERE products_id='$products_id'");
		}	
	
}
//---------------------------------


					

if(is_array($obj->Categoria)){
	//eliminar producto de subcategoria
	$sql="SELECT id,sub_categories_id FROM det_sub_categories WHERE products_id=$products_id";
	$arr_det=q($sql);
	if(is_array($arr_det)){
		foreach($arr_det as $sub){
			$esta=false;
			foreach($obj->Categoria as $cat){
				if($sub['sub_categories_id']==$cat->codigo){
					$esta=true;
				}
			}
			if(!$esta){
				$idSub=$sub['id'];
				q("DELETE FROM det_sub_categories WHERE id='$idSub'");
			}
		}
	}
	//-------------------------------

	foreach($obj->Categoria as $cat){


		$sql="SELECT 1 FROM det_sub_categories WHERE products_id=$products_id AND sub_categories_id='$cat->codigo'";
			
		$arr_det=q($sql);
		
		if(!is_array($arr_det)){
			$sql="INSERT INTO det_sub_categories (products_id,sub_categories_id) VALUES ($products_id,$cat->codigo)";
//				exit($sql);
			q($sql);
		}
	}
}



				}else{
					//$msj="SKU invalido o inventario -1: ".$obj->sku."";
					//msj($msj);
					//echo $msj;
				}
	
				}


			}

//ACTIVAR O DESACTIVAR PRODUCTOS-----


	$arr=q("SELECT sku,status FROM products");
	if(is_array($arr)){
		foreach($arr as $ob){
			
			$sku=$ob['sku'];
			//$status=$ob['status'];
			//print_r($todoProducto); exit();
			//echo $todoProducto['sku_idempiere'][$sku]."\n";
			//echo "existe: ".$todoProducto['sku_idempiere'][$sku]." status: ".$status."\n";
			//if($todoProducto['sku_idempiere'][$sku] and $status=='I'){
				//q("UPDATE products SET status='A' WHERE sku='$sku'");
			//}else
			if(!$todoProducto['sku_idempiere'][$sku]){
				q("UPDATE products SET status='I' WHERE sku='$sku'");
			}
		}
	}

//-----------------







			if($malo){
				q("ROLLBACK");
			}else{
				q("COMMIT");
			}
			
		}
	}else{
		echo "no data";
	}


/*                  [sku] => 036124
                    [um] => PIEZA
                    [organizacion] => TIENDA 03 SANTA CECILIA
                    [isecommerce] => Y
                    [price] => 124666.66
                    [m_product_id] => 1025707
                    [category] => 1005568
                    [item_name] => JUANA MEZCLAS LISTAS CACHAPAS 500 GR
                    [item_description] => JUANA MEZCLAS LISTAS CACHAPAS 500 GR
                    [ad_org_id] => 1000007
					[sugerido] => 121
					
					*/

}
function procesarSubCategoriasYcategorias($data){
	//borrar categorias y sub categorias
	//q("DELETE FROM det_sub_categories");
	//q("DELETE FROM sub_categories");
	//q("DELETE FROM categories");
	foreach($data as $obj){
		if(is_array($obj->Categoria)){
			foreach($obj->Categoria as $cat){
				$categoria[$cat->codigo]=$cat->categoria;
			}
		}else{
			//PRODUCTO SIN CATEGORIA
			//echo "Producto sin categoria".print_r($obj,true);
			//exit();
		}
		
	}
	//print_r($categoria);
	foreach($categoria as $cod=>$nombre){
		$sql="SELECT id FROM categories WHERE id='$cod'";
		$res=q($sql);
		if(is_array($res)){
			$sql="UPDATE categories SET name='$nombre',updated_at=NOW() WHERE id='$cod' RETURNING id";
			$res=q($sql);
			$sql="UPDATE sub_categories SET name='$nombre',updated_at=NOW() WHERE id='$cod' RETURNING id";
			$res=q($sql);
		}else{
			$sql="INSERT INTO categories (id,name,\"order\",created_at) VALUES ('$cod','$nombre',30,NOW()) RETURNING id";
			//exit($sql);
			$res=q($sql);
			if(!is_array($res)){
				echo "error: ".$sql;
			}
			$sql="INSERT INTO sub_categories (id,name,created_at,categories_id) VALUES ('$cod','$nombre',NOW(),'$cod') RETURNING id";
			$res=q($sql);
			if(!is_array($res)){
				echo "error: ".$sql;
			}
		}
	}

}
function crearArreglo($arr){
	foreach($arr as $obj){
		$resArray[$obj['nro_tienda']]=$obj['id'];
	}
	return $resArray;
}
function msj($value){
	syslog(LOG_INFO,$value);
}
function get_url($url){
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 360);

		if(curl_errno($ch)>0 and !$ch){
			return false;
		}else{
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
				return curl_exec($ch);
				curl_close($ch);
		}
		
		return true;
}
function send_url($arr,$url){
	
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 360);
curl_setopt($ch, CURLOPT_POSTFIELDS, 
http_build_query($arr));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close ($ch);

if ($server_output == "OK") {return true;} else {return false;}
}

function leer($nombre,$url){
		syslog(LOG_INFO,"Leyendo... ".$nombre);
		if($res=get_url($url)){
			syslog(LOG_INFO,"Leido!");
			if(isJson($res)){
				return json_decode($res);
			}else{
				return false;
			}
			
		}else{
			syslog(LOG_WARNING, "Error");	
			return false;
		}
	
}
function isJson($string) {
	json_decode($string);
	return (json_last_error() == JSON_ERROR_NONE);
}
















function extraer_datos_db(){
    $gestor = @fopen(".env", "r");
    if ($gestor) {
        while (($búfer = fgets($gestor, 4096)) !== false) {
            $arr[]=$búfer;
        }
        fclose($gestor);
    }
    $db['host']     =limpiar($arr[9]);
    $db['port']     =limpiar($arr[10]);
    $db['database'] =limpiar($arr[11]);
    $db['user']     =limpiar($arr[12]);
    $db['password'] =limpiar($arr[13]);
    return $db;
}
function limpiar($var){
    return trim(explode('=',$var)[1]);
}
function conectar_db($host,$base_dato,$usuario,$clave,$puerto){
    $dbconn = pg_connect("host=".$host." dbname=$base_dato user=$usuario password=$clave port=$puerto")
    or die('No se ha podido conectar: ' . pg_last_error());
    return $dbconn;
}
function q($sql){
    $arr=array();
   // $result = pg_query($sql) or die(false);
   $con=$GLOBALS["con"];
    if (pg_send_query($con,$sql)) {
        $res=pg_get_result($con);
        if ($res) {
          $state = pg_result_error_field($res, PGSQL_DIAG_SQLSTATE);
          if ($state==0) {
            while ($line = pg_fetch_array($res, null, PGSQL_ASSOC)) {
                $arr[]=$line;
            }
            if(count($arr)){
                return $arr;
            }else{
                return true;
            }
          }
          else {
              switch($state){
                  case 23505:
                    salida("El registro ya existe, intente de nuevo.");
                  break;
                  case '22P02':
                    salida("Ingrese todos los campos obligatorios.");
                    
                  break;
                  default:
                    salida("Error en la consulta.");
              }
          }
        }  
      }
      salida("Disculpe, intente de nuevo");


}
function salida($var){
echo $var."\n";
}
function microtime_float()
{
list($useg, $seg) = explode(" ", microtime());
return ((float)$useg + (float)$seg);
}

function enviarCorreo($email,$titulo,$body,$masivo=false){

    require __DIR__.'/vendor/autoload.php';
   // echo is_file(__DIR__.'/../vendor/autoload.php');


	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'mail.biomercados.com.ve';                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'noreply@biomercados.com.ve';                     // SMTP username
	    $mail->Password   = 'Bio2020';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        
	    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
	    $mail->SMTPDebug = 0;
        $mail->CharSet = 'UTF-8';
	    //Recipients
		$mail->setFrom('noreply@biomercados.com.ve', 'Biomercados - Bio en línea');
		if($masivo){
			foreach($email as $correo){
				$mail->addAddress($correo);
			}
		}else{
			$mail->addAddress($email);
		}
	    
	    $mail->isHTML(true);
	    $mail->Subject = $titulo;
	    $mail->Body    = $body;
	    
	    $mail->send();
	    return true;
	} catch (Exception $e) {
		echo $e;
	    return false;
	}

}
?>