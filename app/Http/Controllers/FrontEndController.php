<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function getIndex()
    {
        $ultimosAnuncios = Ad::orderBy('created_at', 'DESC')->take(6)->get();

        return view('welcome', [
            'ultimosAnuncios' => $ultimosAnuncios
        ]);
    }
    }
}
