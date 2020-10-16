<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Category;
use App\Models\Stock;
use App\Models\Variation;
use App\Models\Variation_Assign;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function create()
    {
        $variations = Variation::all();
        $categories = Category::all();
        return view('stocks.create', compact('variations', 'categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads\stock');
            $image->move($destinationPath, $name);

            $stock = Stock::create([
                'name' => $request->input('name'),
                'image' => "uploads\stock\\" . $name,
                'product_type' => $request->input('type'),
                'category_id' => $request->input('category'),
                'description' => $request->input('description'),
                'quantity' => $request->input('quantity')
            ]);

            if (!$stock) {
                return redirect()->back()->with('error', 'Error Adding Item.');
            }

            for ($i = 0; $i < $request->input('counter'); $i++) {
                if ($request->input('price')[$i] != null) {
                    $assigned = new Assignment();
                    $assigned->stock_id = $stock->id;
                    $assigned->value_id = $request->input('id')[$i];
                    $assigned->price = $request->input('price')[$i];

                    if (!$assigned->save()) {
                        return redirect()->back()->with('error', 'Error Adding Variations.');
                    }
                }
            }
            return redirect()->back()->with('success', 'Item Added Successfully.');
        }
        return redirect()->back()->with('error', 'Image Upload Error.');
    }

    public function index(){
        $stocks = Stock::all();
        return view('stocks.data',compact('stocks'));
    }
}
