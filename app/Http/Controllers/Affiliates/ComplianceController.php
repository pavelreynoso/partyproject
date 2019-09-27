<?php

namespace App\Http\Controllers\Affiliates;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

use Validator;

class ComplianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.users.providers.205.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->update_compliance = $request->has('update_compliance') ? 1 : 0;
        $request->terms_accepted = $request->has('terms_accepted') ? 1 : 0;

        $validator = Validator::make($request->all(),[
            'update_compliance' => 'required',
            'terms_accepted' => 'required',
        ]);
        if($validator->fails())
            {
                return redirect()->route('affiliates.r205.create')->with('danger', 'There was an error')->withInput()->withErrors($validator);
            }
        $provider_details = DB::table('provider_details')->where('user_id', 0)->pluck('id');
        DB::table('provider_details')
            ->where('id', $provider_details)
            ->update(['update_compliance' => $request->update_compliance]);
        DB::table('provider_details')
            ->where('id', $provider_details)
            ->update(['terms_accepted' => $request->terms_accepted]);


        return redirect()->route('affiliates.controlpanel.index')->with('success','Compliance details saved successfully.');
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
