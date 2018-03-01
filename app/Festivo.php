<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Festivo extends Model
{
    //
    protected $table = "festivos";
    protected $fillable =["year","day_festiv" ];
}
