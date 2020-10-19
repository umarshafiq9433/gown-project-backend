<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function create()
    {
        $admin = User::where('role_id',1)->first();
        $consultant = User::where('role_id',2)->first();
        return view('General_Setting.create',compact('admin','consultant'));
    }

    public function update(Request $request)
    {
        if ($request->input('account') == 1) {
            $admin = User::where('role_id', 1)->first();
            $admin->password = Hash::make($request->input('password'));
            if ($admin->save()) {
                return redirect()->back()->with('success', 'Credentials Updated Successfully');
            }
        } else {
            $admin = User::where('role_id', 2)->first();
            $admin->password = Hash::make($request->input('password'));
            if ($admin->save()) {
                return redirect()->back()->with('success', 'Credentials Updated Successfully');
            }
        }
        return redirect()->back()->withInput()->with('error','Error Updating Credentials');
    }
}
