<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{

    public function index()
    {
        return view('dashboard.users.providers.home');
    }

    public function register()
    {
        return view('dashboard.users.providers.register');
    }

    
}
