<?php

namespace App\Http\Controllers\Affiliates;

use Auth;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->pagination(5);

        return view('pages.users.providers.201.index',compact('products'))->with('i', (request()->input('page', 1)-1 ) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $articles = "";
        return view('pages.users.providers.201.create', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string|50',
            'description' => 'required|255',
            'portrait' => 'required',
            'portrait.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
        ]);

        if ($image = $request->file('image')) {
            foreach ($image as $files) {
            $destinationPath = '/storage/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert[]['image'] = "$profileImage";
            }
        }
        Product::create($request->all());

        return redirect()->route('pages.users.providers.201.create')->withSuccess('Great! Product has been successfully uploaded.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required|50',
            'description' => 'required|255',
            'portrait' => 'required',
            'portrait.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
        ]);

        if ($image = $request->file('portrait'))
        {
                $destinationPath = '/storage/image/'; // upload path
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $insert['portrait'] = "$profileImage";
        }

        if ($image = $request->file('images'))
        {
            foreach ($image as $files)
            {
                $destinationPath = '/storage/image/'; // upload path
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $insert[]['images'] = "$profileImage";
            }
        }
        Product::create($request->all());

        return redirect()->route('pages.users.affiliates.201.create')->withSuccess('Great! Product has been successfully uploaded.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $id)
    {
        $id->delete();

        return redirect()->route('pages.users.providers.201.index')->with('success','Product deleted successfully');
    }
}
