<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Classes\BD;
use DataTables;
use Response;
use DB;
use Auth;
use App\Classes\Common;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.events.products');
    }

    public function product_details()
    {
        return view('dashboard.events.product');
    }
}
