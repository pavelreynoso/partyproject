<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Client;
use App\Role;
use App\Classes\BD;
use DataTables;
use Response;
use DB;
use Auth;
use App\Classes\Common;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.users.clients.home');
    }

    public function register()
    {
        $role = 'User';
        return view('pages.users.clients.register',compact('role'));
    }
}
