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

    public function Value(){
        return $this->belongsTo('App\Models\Value');
    }
}
