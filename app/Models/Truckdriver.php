<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truckdriver extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos 
    public function packages(){
        return $this->hasMany('App\Models\packages');
    }

    //muchos a muchos
    public function trucks(){
        return $this->belongsToMany('App\Models\Truck');
    }

}
