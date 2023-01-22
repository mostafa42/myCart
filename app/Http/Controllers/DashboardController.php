<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.welcome');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.account_settings.profile', compact('user'));
    }

    public function update_profile(Request $request)
    {
        $user = Auth()->user()->update([
            "name" => $request->name,
            "email" => $request->email ,
        ]);
        
        return redirect()->back()->with('success', ' Edited sucessfully');
    }
}
