<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{

    public function index()
    {
        return view('dashboard.users.providers.home');
    }

    public function register1()
    {
        return view('dashboard.users.providers.100');
    }

    public function register21()
    {
        return view('dashboard.users.providers.201');
    }

    public function register22()
    {
        return view('dashboard.users.providers.202');
    }

    public function register31()
    {
        return view('dashboard.users.providers.301');
    }
    
    public function register32()
    {
        return view('dashboard.users.providers.302');
    }

}
