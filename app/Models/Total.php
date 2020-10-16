<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    use HasFactory;

    public function Assignment(){
        return $this->belongsTo('App\Models\Assignment');
    }

    public function Value(){
        return $this->belongsTo('App\Models\Value');
    }
}
