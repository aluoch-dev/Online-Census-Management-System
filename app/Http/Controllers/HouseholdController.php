<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseholdController extends Controller
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
        return view('forms.household');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required|integer',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);


        $household= new \App\Household;
        $household->user_id = \Auth::user()->id;
        $household->state_id = \App\State()->id;
        $household->county_id= \App\County()->id;
        $household->subcounty_id= \App\Subcounty()->id;
        $household->school_id= \App\School()->id;
        $household->cookingmeans_id= \App\Amenity()->id;
        $household->structure_id= \App\HouseStructure()->id;
        $household->disposal_id= \App\Amenity()->id;
        $household->save();
        
        return redirect('households')->with('success', 'household has been added');

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
