<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Auth\Events\Login;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login_view()
    {
        return view('main.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email' , 'password') ;
        
        if (Auth::attempt($credentials)) {
            return redirect('/admin/dashboard');
        }else{
            Alert::error('Invalid credentials' , '');
            return back();
        }
        
        
    }
}
