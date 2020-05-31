<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontEndController extends Controller
{
    public function getIndex()
    {
        $ultimosAnuncios = Ad::orderBy('created_at', 'DESC')->take(6)->get();

        return view('welcome', [
            'ultimosAnuncios' => $ultimosAnuncios
        ]);
    }

    public function getAnuncio($slug)
    {
        return view('showAd', [
            'anuncio' => Ad::where('slug', $slug)->get()
        ]);
    }
}
