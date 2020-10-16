<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;

    public function Total(){
        return $this->hasMany('App\Models\Total');
    }

    public function Variation(){
        return $this->belongsTo('App\Models\Variation');
    }
}
