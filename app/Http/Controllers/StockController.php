<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Category;
use App\Models\Stock;
use App\Models\Total;
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
            if ($stock) {
                for ($i = 1; $i <= $request->input('variations-count'); $i++) {
                    if ($request->exists('variations-' . $i)) {
                        $assigned = new Assignment();
                        $assigned->stock_id = $stock->id;
                        $assigned->variation_id = $request->input('variations-' . $i);
                        $assigned->save();

                        if ($assigned->save()) {
                            for ($j = 0; $j < count($request->input('id-' . $i)); $j++) {
                                if ($request->input('price-' . $i)[$j] != null) {
                                    $total = new Total();
                                    $total->assignment_id = $assigned->id;
                                    $total->value_id = $request->input('id-' . $i)[$j];
                                    $total->price = $request->input('price-' . $i)[$j];
                                    $total->save();
                                }
                            }
                        }
                    }
                }
            }
            return redirect('admin/stock/')->with('success', 'Item Added Successfully.');
        }
        return redirect()->back()->with('error', 'Image Upload Error.');
    }

    public
    function index()
    {
        $stocks = Stock::all();
        return view('stocks.data', compact('stocks'));
    }

    public
    function edit($id)
    {
        $variations = Variation::all();
        $categories = Category::all();
        $stock = Stock::where('id', $id)->first();
        return view('stocks.edit', compact('stock', 'variations', 'categories'));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads\stock');
            $image->move($destinationPath, $name);

            $stock = Stock::where('id', $id)->update([
                'name' => $request->input('name'),
                'image' => "uploads\stock\\" . $name,
                'product_type' => $request->input('type'),
                'category_id' => $request->input('category'),
                'description' => $request->input('description'),
                'quantity' => $request->input('quantity')
            ]);
            if ($stock) {
                for ($j = 0; $j < count($request->input('id-' . $i)); $j++) {
                    if ($request->input('price-' . $i)[$j] != null) {
                        $total = find($request->input('id')[$j]);
                        $total->price = $request->input('price-' . $i)[$j];
                        $total->save();
                    }
                }
            }
            return redirect('admin/stock/')->with('success', 'Item Updated Successfully.');
        } else {
            $stock = Stock::where('id', $id)->update([
                'name' => $request->input('name'),
                'product_type' => $request->input('type'),
                'category_id' => $request->input('category'),
                'description' => $request->input('description'),
                'quantity' => $request->input('quantity')
            ]);
            if ($stock) {
                for ($j = 0; $j < count($request->input('id')); $j++) {
                    if ($request->input('price')[$j] != null) {
                        $total = Total::find($request->input('id')[$j]);
                        $total->price = $request->input('price')[$j];
                        $total->save();
                    }
                }
            }
            return redirect('admin/stock/')->with('success', 'Item Updated Successfully.');
        }
    }

    public function destroy(Request $request)
    {
        $delete = Stock::find($request->input('id'))->delete();
        if($delete){
            return redirect('admin/stock/')->with('success', 'Item Deleted Successfully.');
        }
        return redirect('admin/stock/')->with('error', 'Deletion Error.');
    }
}
