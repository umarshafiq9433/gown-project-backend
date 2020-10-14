<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation_Value extends Model
{
    protected $table = "variation_values";
    use HasFactory;

    public function Variation(){
        return $this->belongsTo('App\Models\Variations');
    }
}
