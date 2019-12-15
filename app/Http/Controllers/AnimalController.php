<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\CitizensImport;
use Maatwebsite\Excel\Facades\Excel; 
use App\Animal;
use App\Animalownership;
use App\Household;
use App\User;
use App\Citizen;
use Auth;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('animal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animals = Animal::all();
        $citizen = \App\Citizen::where('household_id', Auth::user()->household->id)->first();

        return view('animal.create', compact('animals', 'citizen'));
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
            'animal_id' => '',
            'animal_count' => '', 
 
         ]);
 
         
         $animalownership = new \App\Animalownership;
         $animalownership->household_id = \Auth::user()->household->id;
         $animalownership-> animal_id = $request->get('animal_id');
         $animalownership-> animal_count = $request->get('animal_count');
         
         
         $animalownership -> save();
         return redirect('/animal/index')->with('success', 'Animal ownership has been added');
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
            'animal_id' => '',
            'animal_count' => '', 
 
         ]);
 
         $animalownership = App\Animalownership:: find($id);
         $animalownership-> animal_id = $request->get('animal_id');
         $animalownership-> animal_count = $request->get('animal_count');
         
         $animalownership -> save();
         return redirect('/animal/index')->with('success', 'Animal ownership has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animalownership = animalownership::find($id);
        $animalownership->delete();
        return redirect('/animal/index')->with('success', 'Animal_ownership has been deleted Successfully');
    }

    
    /**
     * display import page
     */
    public function importview()
    {
        return view('animal.import');
    }

    /**
     * preform import function
     */
    public function importAnimals()
    {
        Excel::import(new AnimalsImport,request()->file('file'));
           
        return back();
    }
}
