<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Data View
    public function index()
    {
        $categories = Category::all();
        return view('categories.data', compact('categories'));
    }

    // Store Data
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        if ($category->save()) {
            return redirect()->back()->with('success', 'Category Added Successfully.');
        }
        return redirect()->back()->with('error', "Can't Add Category.<br> Please! Try Again Later");
    }

    //Update Data
    public function update(Request $request)
    {
        $category = Category::where('id', $request->input('id'))->update([
            'name' => $request->input('name')
        ]);
        if ($category) {
            return redirect()->back()->with('success', 'Updated Successfully.');
        }
        return redirect()->back()->with('error', 'Error in Update.<br>Please try Again Later');
    }

    //Delete Data
    public function destroy(Request $request)
    {
        $category = Category::where('id', $request->input('id'))->delete();
        if ($category) {
            return redirect()->back()->with('success', 'Deleted Successfully.');
        }
        return redirect()->back()->with('error', 'Error in Deletion.<br>Please try Again Later');
    }
}
