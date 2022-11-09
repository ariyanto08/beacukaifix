<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    function login()
    {
        return view('login');
    }

    function loginproses()
    {
        if(auth()->guard('user')->attempt(['nip' => request('nip'),('password')])){
            return redirect('menu/dashboard-admin');
        }
    }

    function logout()
    {
        Auth()->guard('user');
        return redirect('login');
    }
}
