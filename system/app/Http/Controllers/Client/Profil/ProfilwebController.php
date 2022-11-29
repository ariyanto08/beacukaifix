<?php

namespace App\Http\Controllers\Client\Profil;
use App\Http\Controllers\Controller;
use App\Models\Profil;


class ProfilwebController extends Controller
{
    function showProfil()

    {
        $data['list_profil'] = Profil::all();
        return view('content.front.profil.profil',$data);
    }
}
