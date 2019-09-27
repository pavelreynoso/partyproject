<?php

namespace App\Http\Controllers\Affiliates;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ArticleCategory;
use App\EventCategory;
use App\OfferCategory;
use App\User;

use App\ProviderDetails;

use Validator;

class ProviderDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = ArticleCategory::all();
        $events = EventCategory::all();
        $offers = OfferCategory::all();
        return view('pages.users.providers.101.index',compact('articles', 'events', 'offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = ArticleCategory::all();
        $events = EventCategory::all();
        $offers = OfferCategory::all();
        return view('pages.users.providers.101.create', compact('articles', 'events', 'offers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|max:30',
            'description' => 'required|max:255',
            'offer_type' => 'required',
            'event_type' => 'required',
            'article_type' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->with('danger', 'There was an error')->withInput()->withErrors($validator);
        }           
        ProviderDetails::create($request->all());
        return redirect()->route('affiliates.r212.create')->with('success','Provider details saved successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.users.providers.101.show');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
