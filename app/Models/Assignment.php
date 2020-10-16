<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;


    public function Stock(){
        return $this->belongsTo('App\Models\Stock');
    }

    public function Variation(){
        return $this->belongsTo('App\Models\Variation');
    }

    public function Total(){
        return $this->hasMany('App\Models\Total');
    }
}
