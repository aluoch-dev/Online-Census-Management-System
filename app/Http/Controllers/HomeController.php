<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function enumeration()
    {
        $user = \App\User::where('national_id',\Auth::user()->national_id)->firstOrFail();
        $households = \App\Household::where('user_id',\Auth::user()->id)->get();
        $citizens = \App\Citizen::where('household_id',\Auth::user()->household->id)->get();
        $animalownerships = \App\Animalownership::where('household_id',\Auth::user()->household->id)->get();
        $assetownerships = \App\Assetownership::where('household_id',\Auth::user()->household->id)->get();
        return view('enumeration', get_defined_vars());
    }
}
