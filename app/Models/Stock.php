<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'name',
        'image',
        'product_type',
        'category_id',
        'description',
        'quantity'
    ];
    use HasFactory;

    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function Assignment(){
        return $this->hasMany('App\Models\Assignment');
    }
}
