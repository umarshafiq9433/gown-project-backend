<?php

namespace App\Http\Controllers;

use App\Models\Variation;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function create(){
        $variations = Variation::all();
        return view('stocks.create',compact('variations'));
    }
}
