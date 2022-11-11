<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showDashboardSuperAdmin(){
        return view('menu.dashboard-super-admin');
    }
    function showDashboardAdmin(){
        return view('menu.dashboard-admin');
    }

}
