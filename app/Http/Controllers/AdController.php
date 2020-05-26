<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('sendToModeration');
    }

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

    public function sendToModeration(Request $request)
    {
    }
}
