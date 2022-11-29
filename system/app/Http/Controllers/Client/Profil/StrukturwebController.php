<?php

namespace App\Http\Controllers\Client\Profil;
use App\Http\Controllers\Controller;
use App\Models\Struktur;


class StrukturwebController extends Controller
{
    function showStruktur()

    {
        $data['list_struktur'] = Struktur::all();
        return view('content.front.profil.struktur',$data);
    }

}
