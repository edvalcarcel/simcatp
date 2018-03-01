<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total_lado extends Model
{
    //
    
    
            protected $table="total_lados";

    protected  $fillable=["lado","producto","cantidad","peso","grafica_id"];
}
