<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $session = Auth::user();
        if($session->hasRole('Provider'))
            return redirect()->route('affiliates.r101.create');
        elseif($session->hasRole('Admin'))
            return redirect()->route('admin.users.index');
        else
            return view('index');
    }
}
