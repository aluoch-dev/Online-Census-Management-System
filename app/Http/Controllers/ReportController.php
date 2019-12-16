<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PdfReport;
use Auth;
use App\User;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function dailyCitizen()
    {
        $citizens = \App\Citizen::whereDate('created_at', '=', Carbon::today()->toDateString())->get();
        //return response()->json($citizens);   
        return view('admin.dailycitizens', get_defined_vars()); 
    }

    public function weeklyCitizen()
    {
        $citizens = \App\Citizen::whereDate('created_at', today())->whereDate('created_at', today()->subDays(1))->whereDate('created_at', today()->subDays(2))->whereDate('created_at', today()->subDays(3))->whereDate('created_at', today()->subDays(4))->whereDate('created_at', today()->subDays(5))->whereDate('created_at', today()->subDays(6))->orderByDesc('created_at')->get();
        //return response()->json($citizens);   
        return view('admin.weeklycitizens', get_defined_vars()); 
    }

    public function dailyRegistration()
    {
        $users = \App\User::whereRole_id(1)->whereDate('created_at', '=', Carbon::today()->toDateString())->get();
        //return response()->json($citizens);   
        return view('admin.dailyuser', get_defined_vars()); 
    }

    public function weeklyRegistration()
    {

        $users = \App\User::whereRole_id(1)->whereDate('created_at', today())->whereDate('created_at', today()->subDays(1))->whereDate('created_at', today()->subDays(2))->whereDate('created_at', today()->subDays(3))->whereDate('created_at', today()->subDays(4))->whereDate('created_at', today()->subDays(5))->whereDate('created_at', today()->subDays(6))->orderByDesc('created_at')->get();
        //return response()->json($citizens);   
        return view('admin.weeklyuser', get_defined_vars()); 
    }

    public function enumeration()
    {
        $citizens = \App\Citizen::all();
        return view('admin.enumeratedUsers', get_defined_vars());
    }

    public function users()
    {
        $users = \App\User::all();
        return view('admin.allUsers', get_defined_vars());

    }

}
