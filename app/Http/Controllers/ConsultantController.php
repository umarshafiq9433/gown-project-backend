<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ConsultantController extends Controller
{
    public function index()
    {
        $consultants = Consultant::all();
        return view('consultant.data', compact('consultants'));
    }

    public function create()
    {
        return view('consultant.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $username = Consultant::where('username', $request->input('username'))->exists();

        if ($username) {
            return redirect()->back()->withInput()->with('error', 'Username Already Exist.');
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads\consultant');
            $image->move($destinationPath, $name);

            $consultant = new Consultant();
            $consultant->image = 'uploads/consultants/' . $name;
            $consultant->first_name = $request->input('first_name');
            $consultant->last_name = $request->input('last_name');
            $consultant->username = $request->input('username');
            $consultant->password = Hash::make($request->input('password'));
            $consultant->commission = $request->input('commission');
            $consultant->description = $request->input('description');
            if ($consultant->save()) {
                return redirect('/admin/consultant/')->with('success', 'Consultant Added Successfully.');
            }
            return redirect()->back()->with('error', 'Can\'t add Consultant. Try Again Later');
        }
        return redirect()->back()->with('error', 'Image Upload Error.');
    }

    public function changeStatus($id)
    {
        $consultant = Consultant::find($id);
        if ($consultant->status == "Active") {
            $consultant->status = "Disabled";
            if ($consultant->save()) {
                return redirect()->back()->with('success', 'Consultant Disabled Successfully.');
            }
        } else {
            $consultant->status = "Active";
            if ($consultant->save()) {
                return redirect()->back()->with('success', 'Consultant Activated Successfully.');
            }
        }
        return redirect()->back()->with('error', 'Consultant Not Found.');
    }

    public function edit($id)
    {
        $consultant = Consultant::where('id', $id)->first();
        return view('consultant.edit', compact('consultant'));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads\consultant');
            $image->move($destinationPath, $name);

            $consultant = Consultant::find($id);
            $consultant->image = 'uploads/consultants/' . $name;
            $consultant->first_name = $request->input('first_name');
            $consultant->last_name = $request->input('last_name');
            $consultant->commission = $request->input('commission');
            $consultant->description = $request->input('description');
            if ($consultant->save()) {
                return redirect('/admin/consultant/')->with('success', 'Consultant Updated Successfully.');
            }
            return redirect()->back()->with('error', 'Can\'t Update Consultant. Try Again Later');
        } else {
            $consultant = Consultant::find($id);
            $consultant->first_name = $request->input('first_name');
            $consultant->last_name = $request->input('last_name');
            $consultant->commission = $request->input('commission');
            $consultant->description = $request->input('description');
            if ($consultant->save()) {
                return redirect('/admin/consultant/')->with('success', 'Consultant Updated Successfully.');
            }
            return redirect()->back()->with('error', 'Can\'t Update Consultant. Try Again Later');
        }
    }

    public function destroy(Request $request)
    {
        $consultant = Consultant::find($request->input('id'))->delete();
        if ($consultant) {
            return redirect('/admin/consultant/')->with('success', 'Consultant Updated Successfully.');
        }
        return redirect()->back()->with('error', 'Can\'t Delete Consultant. Try Again Later');
    }
}
