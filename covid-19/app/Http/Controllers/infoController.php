<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class infoController extends Controller
{
    public function index()
    {
        $respone = Http::get('https://api.kawalcorona.com/indonesia/provinsi');

        // $respones = Http::get('https://api.kawalcorona.com/sembuh');
        $globalrespone = Http::get('https://api.kawalcorona.com/indonesia');


        $datas = $respone->json();
        $global = $globalrespone->json();
        // dd($data);

        return view('index', compact('datas', 'global'));
    }
}