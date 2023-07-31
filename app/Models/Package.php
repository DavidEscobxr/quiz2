<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function truckdriver(){
        return $this->belongsTo('App\Models\truckdriver');
    }

    // Relacion Uno a Muchos 
    public function province(){
        return $this->hasMany('App\Models\province');
    }
}

    

