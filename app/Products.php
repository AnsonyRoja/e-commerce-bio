<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FuncionesGenerales;

class Products extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
    public function setPriceAttribute($value)
    {
        $fg= new FuncionesGenerales;
        $this->attributes['price']=$fg->set_formato_moneda($value);
    }
    public function getPriceAttribute($value){
       $fg= new FuncionesGenerales;
       return $fg->get_formato_moneda($value);
    }

    public function setDiscountAttribute($value)
    {
        $fg= new FuncionesGenerales;
        $this->attributes['discount']=$fg->set_formato_moneda($value);
    }
    public function getDiscountAttribute($value){
       $fg= new FuncionesGenerales;
       return $fg->get_formato_moneda($value);
    }
    public function setStatusAttribute($value)
    {
    
        $this->cambiarEstatusIdempiere($value,$this->attributes['sku']);
        $this->attributes['status']=$value;
    }
    public function cambiarEstatusIdempiere($value,$id){

        $data=Array();
        //$datab=Array();
        $data[]=$id;
        if($value=='A'){
           // $datab[$id]='Y';
            $data[]='Y';
        }else{
            $data[]='N';
           // $datab[$id]='N';
        }
        
        
        
        $json=json_encode($data);
       // $jsonb=json_encode($datab);

        
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,"http://ecommerce:2ViGiPJ1DAElzDwEteBbiIH4gF939fKuOD5GKRhedZp@200.8.18.230:9000/api/v1/SyncProductActChk");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
                    "data=".$json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $server_output = curl_exec($ch);
        
        curl_close ($ch);
        
        // Further processing ...
       //exit($server_output);


    }
}
