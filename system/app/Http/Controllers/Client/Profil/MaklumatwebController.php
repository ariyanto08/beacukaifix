<?php

namespace App\Http\Controllers\Client\Profil;
use App\Http\Controllers\Controller;
use App\Models\Maklumat;


class MaklumatwebController extends Controller
{
    function showMaklumat()

    {
        $data['list_maklumat'] = Maklumat::all();
        return view('content.front.profil.maklumat',$data);
    }
}
