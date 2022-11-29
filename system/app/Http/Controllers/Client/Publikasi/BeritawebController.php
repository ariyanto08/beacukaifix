<?php

namespace App\Http\Controllers\Client\Publikasi;
use App\Http\Controllers\Controller;
use App\Models\Berita;


class BeritawebController extends Controller
{
    function showBerita()

    {
        $data['list_berita'] = Berita::latest()->paginate(5);
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->take(3)->get();
        return view('content.front.publikasi.berita',$data);
    }

    function filter()
    {
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->take(3)->get();
        $nama = request('nama');
        $data['nama'] = $nama;
        $data['list_berita'] = Berita::where('nama', 'like', "%$nama%")->paginate(3);
        return view('content.front.publikasi.berita', $data);
    }

    function showwebBerita($berita)
    {
        $data['berita'] = Berita::find($berita);
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->take(3)->get();
        return view('content.front.publikasi.detail', $data);
    }

}
