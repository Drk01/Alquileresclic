<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isBlocked');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (isset(auth()->user()->profile->remaining_ads)) {
            $remainingAds = auth()->user()->profile->remaining_ads;
        } else {
            $remainingAds = 0;
        }

        if (isset(auth()->user()->profile->ads)) {
            $uploadedAds = auth()->user()->profile->ads->where('status', 'Aprobado')->count();
        } else {
            $uploadedAds = 0;
        }

        if (isset(auth()->user()->favorites)) {
            $favoritesCounter = auth()->user()->favorites->count();
        } else {
            $favoritesCounter = 0;
        }

        $cantidadAnuncios = Ad::where('status', 'Aprobado')->count();
        $scoresAnuncios = Ad::where('status', 'Aprobado')->get('score');

        $sumatoria = 0;
        foreach ($scoresAnuncios as $key) {
            $sumatoria += $key->score;
        }

        if ($cantidadAnuncios != 0 && $sumatoria != 0) {
            $promedio = $sumatoria / $cantidadAnuncios;
        } else {
            $promedio = 0;
        }

        return view('home', [
            'remainingAds' => $remainingAds,
            'uploadedAds' => $uploadedAds,
            'favoritesCounter' => $favoritesCounter,
            'rating' => $promedio
        ]);
    }
}
