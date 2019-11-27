<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;
use App\Relationship;
Use App\Studyfield;
use App\Educationlevel;
use App\Disability;
use App\Employmentstatus;
use App\Occupation;
use App\Incomesource;
use App\Citizen;
use App\Household;
use App\User;
use Auth;

class CitizenController extends Controller
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

        $genders = Gender::all();
        $relationships = Relationship::all();
        $studyfields = Studyfield::all();
        $educationlevels = Educationlevel::all();
        $disabilities = Disability::all();
        $employmentstatuses = Employmentstatus::all();
        $occupations = Occupation::all();
        //$household = Household::find($id);
        
        //$citizen = \Auth::user()->household->citizen->id->get();
        $household = \App\Household::where('household_id', \Auth::user()->household->id);
        return response()->json($household);
        //return view('citizen.create', compact('genders', 'relationships', 'studyfields','disabilities', 'employmentstatuses', 'occupations', 'educationlevels', 'household'));
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
            'fname' =>'required|string',
            'mname' =>'required|string',
            'lname' =>'required|string',
            'gender_id' => 'required',
            'relationship_id' => 'required',
            'age' =>'required',
            'relationship_id' =>'required',
            'field_id' =>'',
            'disability_id' =>'',
            'education_id' =>'',
            'employment_id' =>'',
            'occupation_id' =>'',
            'image' => 'sometimes|mimes:jpg,jpeg,png'

        ]);

        $citizen = new Citizen;
        $citizen->household_id = \Auth::user()->household->id;
        $citizen->mname= $request->get('mname');
        $citizen->lname= $request->get('lname');
        $citizen->gender_id= $request->get('gender_id');
        $citizen->age= $request->get('age');
        $citizen->relationship_id= $request->get('relationship_id');
        $citizen->field_id= $request->get('field_id');
        $citizen->disability_id= $request->get('disability_id');
        $citizen->education_id= $request->get('education_id');
        $citizen->employment_id=$request->get('employment_id');
        $citizen->occupation_id= $request->get('occupation_id');
        $citizen->income_source= $request->get('income_source');
        if($request->has('image'))
         {
            $file = $request->image;
            $name= time().$file->getClientOriginalName();
            $file->move(public_path().'/images/uploads/', $name);
            $product->filename= '/images/uploads/'.$name;
         }
        $citizen-> save();
        //return response()->json($citizen);

        return redirect('/animals/create')->with('success', 'Citizen has been added');


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
        $citizen = \App\Citizen::find($id);
        return view('citizen.edit')->withCitizen($citizen);
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
            'fname' =>'required|string',
            'mname' =>'required|string',
            'lname' =>'required|string',
            'gender_id' => 'required',
            'relationship_id' => 'required',
            'age' =>'required|bigInteger',
            'relationship_id' =>'required',
            'field_id' =>'required',
            'disability_id' =>'required',
            'education_id' =>'required',
            'employment_id' =>'required',
            'occupation_id' =>'required',
            'image' => 'sometimes|mimes:jpg,jpeg,png'

        ]);


        $citizen = citizen:: find($id);
        $citizen->fname =$request-get('fname');
        $citizen->mname = $request-get('mname');
        $citizen->lname = $request-get('lname');
        $citizen->gender_id = $request-get('gender_id');
        $citizen->Age = $request-get('age');
        $citizen->relationship_id = $request-get('relationship_id');
        $citizen->field_id = $request-get('field_id');
        $citizen->disability_id = $request-get('disability_id');
        $citizen->education_id = $request-get('education_id');
        $citizen->employment_id = $request-get('employment_id');
        $citizen->occupation_id = $request-get('occupation_id');
        $citizen->income_source = $request-get('income_source');
        if($request->has('image'))
         {
            $file = $request->image;
            $name= time().$file->getClientOriginalName();
            $file->move(public_path().'/images/uploads/', $name);
            $product->filename= '/images/uploads/'.$name;
         }
        $citizen-> save();

        return redirect('/animals/create')->with('success', 'Citizen has been added');

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
