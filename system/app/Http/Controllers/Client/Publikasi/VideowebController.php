<?php

namespace App\Http\Controllers\Client\Publikasi;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\Profil;


class VideowebController extends Controller
{
    function showVideo()

    {
        $data['list_profil'] = Profil::all();
        $data['list_video'] = Video::orderBy('id', 'DESC')->take(9)->get();
        return view('content.front.publikasi.video',$data);
    }
}
