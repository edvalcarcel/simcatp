<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grafica extends Model
{
    //
     protected $table="graficas";
    
    protected  $fillable=['id',"mov_horno_id"];
   
}
