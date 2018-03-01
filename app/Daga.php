<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daga extends Model
{
    //
       protected $table="dagas";
    
    protected  $fillable=['id','codigo','cod_daga','grafica_id',"grupo","seccion"];
}
