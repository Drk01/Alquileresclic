<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{

    public function getAdsForm()
    {
        return view('panel.ads.list');
    }
}