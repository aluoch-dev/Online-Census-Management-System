<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\TodayUsersChart;
use App\User;
use DB;

class AdminController extends Controller
{
    public function index(){

        //return the chart in the blade
        $today_users = User::whereRole_id(1)->whereDate('created_at', today())->count();
        $yesterday_users = User::whereRole_id(1)->whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = User::whereRole_id(1)->whereDate('created_at', today()->subDays(2))->count();
        $users_3_days_ago = User::whereRole_id(1)->whereDate('created_at', today()->subDays(3))->count();
        $users_4_days_ago = User::whereRole_id(1)->whereDate('created_at', today()->subDays(4))->count();
        $users_5_days_ago = User::whereRole_id(1)->whereDate('created_at', today()->subDays(5))->count();
        $users_6_days_ago = User::whereRole_id(1)->whereDate('created_at', today()->subDays(6))->count();
                    
        $chart = new TodayUsersChart;
        $chart->labels(['6 days ago','5 days ago','4 days ago','3 days ago','2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('My dataset', 'line', [$users_6_days_ago, $users_5_days_ago, $users_4_days_ago, $users_3_days_ago, $users_2_days_ago, $yesterday_users, $today_users]);


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
