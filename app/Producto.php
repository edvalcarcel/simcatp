<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table="productos";
    protected $fillable =['id','nombre',"codigo",'categoria','area','largo','ancho','alto'];
}
