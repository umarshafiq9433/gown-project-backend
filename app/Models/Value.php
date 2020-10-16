<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;

    public function Assignment(){
        return $this->hasMany('App\Models\Assignment');
    }

    public function Variation(){
        return $this->belongsTo('App\Models\Variation');
    }
}
