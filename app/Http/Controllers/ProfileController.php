<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getEditProfileForm()
    {
        return view('panel.profiles.editMyProfile');
    }

    public function saveProfileChanges()
    {
    }
}
