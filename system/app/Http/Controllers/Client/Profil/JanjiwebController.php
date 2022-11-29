<?php

namespace App\Http\Controllers\Client\Profil;
use App\Http\Controllers\Controller;
use App\Models\Janji;


class JanjiwebController extends Controller
{
    function showJanji()

    {
        $data['list_janji'] = Janji::all();
        return view('content.front.profil.janji',$data);
    }
}
