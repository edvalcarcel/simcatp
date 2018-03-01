<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mov_horno extends Model
{
    //
        protected $table="mov_hornos";

    protected  $fillable=["id","tipo_mov_horno_id",'fecha_inicio','fecha_fin','horno_id',"descripcion","id_cargue"];
    
    
    
     public function horno()
    {
        return $this->belongsTo('App\Horno');
    }
    
    public function tipo_mov_horno()
    {
        return $this->belongsTo('App\Tipo_mov_horno');
    }
}
