<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxes extends Model
{
    public function setValueAttribute($value)
    {
        $fg= new FuncionesGenerales;
        $this->attributes['value']=$fg->set_formato_moneda($value);
    }
    public function getValueAttribute($value){
       $fg= new FuncionesGenerales;
       return $fg->get_formato_moneda($value);
    }
}
