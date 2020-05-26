<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{

    public function getAdsForm()
    {
        return view('panel.ads.list');
    }

    public function getCreateAdForm()
    {
        return view('panel.ads.create');
    }

    public function getAddDetailsForm($category)
    {
        $category = Category::find($category);
        return view('panel.ads.addDetails', compact('category'));
    }
}
