<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;

    public function Variation_Value(){
        return $this->hasMany('App\Models\Variation_Value');
    }

}
