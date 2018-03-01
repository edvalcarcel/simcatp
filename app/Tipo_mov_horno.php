<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_mov_horno extends Model
{
    //

            protected $table="tipo_mov_hornos";

    protected  $fillable=['nombre_movimiento'];
    
    
   public function mov_hornos()
    {
        return $this->hasMany('App\Mov_horno');
    }
}
