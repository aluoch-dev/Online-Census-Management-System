<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Household;
use App\State;
use App\County;
use App\Subcounty;
use App\School;
use App\Amenity;

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
        $states = State::all();
        $counties = County::all();
        $subcounties = Subcounty::all();
        $schools = School::all();
        $amenities = Amenity::all(); 
    

        return view('household.create',compact('states', 'counties', 'subcounties', 'schools',  'amenities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'state_id' => 'required',
            'county_id' => 'required',
            'subcounty_id' => 'required',
            'school_id' => 'required',
            'cookingmeans_id' => 'required',
            'structure_id' =>'required',
            'disposal_id' =>'required'
 
         ]);
 
         $household = new Household([
             'state_id' => $request->get('state_id'),
             'county_id' =>$request->get('county_id'),
             'subcounty_id' =>$request->get('subcounty_id'),
             'school_id' => $request->get('school_id'),
             'cookingmeans_id' => $request->get('cookingmeans_id'),
             'structure_id' => $request->get('structure_id'),
             'disposal_id' => $request->get('disposal_id'),
         ]);
 
         $household -> save();
         return redirect('/animals/create')->with('success', 'Household has been added');
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

        $request->validate([
            'head_id' => 'required',
            'state_id' => 'required',
            'county_id' => 'required',
            'subcounty_id' => 'required',
            'school_id' => 'required',
            'cookingmeans_id' => 'required',
            'structure_id' =>'required',
            'disposal_id' =>'required'
 
         ]);
 
         $household = household:: find($id);
         $household->head_id = $request->get('head_id');
         $household->state_id = $request->get('state_id');
         $household->county_id = $request->get('county_id');
         $household->school_id = $request->get('school_id');
         $household->cookingmeans_id = $request->get('cookingmeans_id');
         $household->structure_id = $request->get('structure_id');
         $household->disposal_id = $request->get('disposal_id');
         $household->save();
    
        return redirect('/citizens/craete')->with('success', 'Details have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $household = household::find($id);
        $household->delete();
        return redirect('/citizens/create')->with('success', 'household has been deleted Successfully');
    }

    /**
     * autocomplete states
     */

    public function search(Request $request)
    {
          $search = $request->get('term');
      
          $result = State::where('state', 'LIKE', '%'. $search. '%')->get();
 
          return response()->json($result);
            
    } 
}
