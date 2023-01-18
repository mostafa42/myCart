<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.welcome');
    }

    public function profile()
    {
        return view('dashboard.account_settings.profile');
    }
}
