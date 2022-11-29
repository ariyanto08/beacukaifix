<?php

namespace App\Http\Controllers\Client;
use App\Models\Iklan;
use App\Models\Video;
use App\Models\Berita;
use App\Http\Controllers\Controller;


class ClientController extends Controller
{
    function showHome()
    {
        $data['list_iklan'] = Iklan::all();
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->take(3)->get();
        $data['list_video'] = Video::orderBy('id', 'DESC')->take(3)->get();
        return view('content.front.home',$data);
    }
    function showContact()
    {
        return view('content.front.contact');
    }

}
