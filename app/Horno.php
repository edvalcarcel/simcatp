<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horno extends Model
{
    //
    protected $table="hornos";

    protected  $fillable=["horno","Descripcion"];
    
    
    public function mov_hornos()
    {
        return $this->hasMany('App\Mov_horno');
    }
}
