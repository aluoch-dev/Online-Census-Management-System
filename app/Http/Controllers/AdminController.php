<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index(){

        $admins = User::whereRole_id(2)->orderByDesc('created_at')->get();
        $enumerators = User::whereRole_id(3)->orderByDesc('created_at')->get();
        
        return view('admin.welcome', get_defined_vars());
    }

    public function tables(){
        return view('admin.tables');
    }

    public function reports(){
        return view('admin.reports');
    }

    public function notifications(){
        return view('admin.notifications');
    }
}
