<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        
        return view('admin.welcome');
    }

    public function tables(){
        return view('admin.tables');
    }

    public function reports(){
        return view('admin.reports');
    }
}
