<?php

namespace App\Http\Controllers;

use App\Models\Value;
use App\Models\Variation;
use App\Models\Variation_Value;
use Illuminate\Http\Request;

class VariationController extends Controller
{
    public function index()
    {
        $variations = Variation::all();
        return view('variations.data',compact('variations'));
    }


    public function create()
    {
        return view('variations.create');
    }

    public function store(Request $request)
    {
        $find = Variation::where('name', $request->input('name'))->first();
        if ($find != null) {
            return redirect()->back()->with('error', 'Variation Name Already Exist.');
        }
        $flag = 0;
        $variation = new Variation();
        $variation->name = $request->input('name');
        $variation->save();
        for ($i = 1; $i <= $request->input('counts'); $i++) {
            $value = new Value();
            $value->variation_id = $variation->id;
            $value->value = $request->input('val-' . $i);
            if (!$value->save()) {
                $flag = 1;
            }
        }
        if ($flag == 0) {
            return redirect('/admin/variation')->with('success', 'Variation Added Successfully.');
        }
        return redirect()->back()->with('error', 'Error Adding Variation.');
    }

    public function destroy(Request $request)
    {
        $variation = Variation::where('id',$request->input('id'))->delete();
        if($variation){
            return redirect()->back()->with('success','Variation Deleted Successfully.');
        }
        return redirect()->back()->with('error','Deletion Error.');
    }
}
