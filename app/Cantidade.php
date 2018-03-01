<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cantidade extends Model
{
    //
    protected $table="cantidades";
    protected  $fillable=["codigo","cantidad","seccion"];
}
