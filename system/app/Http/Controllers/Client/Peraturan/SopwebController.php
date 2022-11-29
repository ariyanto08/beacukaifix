<?php

namespace App\Http\Controllers\Client\Peraturan;
use App\Http\Controllers\Controller;
use App\Models\Sop;
use App\Models\Faq;


class SopwebController extends Controller
{
    function showSop()

    {
        $data['list_sop'] = Sop::all();
        return view('content.front.peraturan.sop',$data);
    }
    function showFaq()

    {
        $data['list_faq'] = Faq::all();
        return view('content.front.peraturan.faq',$data);
    }
}
