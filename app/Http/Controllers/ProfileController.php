<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['saveProfileChanges']);
    }

    public function getEditProfileForm()
    {
        return view('panel.profiles.editMyProfile');
    }

    public function saveProfileChanges(Request $request, $id)
    {
        $user = User::find($id)->update($request->all());

        $profile = Profile::firstOrCreate(
            ['user_id' => $id],
            [
                'publicName' => $request->publicName,
                'address' => $request->address,
                'city' => $request->city,
                'type' => $request->type
            ]
        )->update([
            'publicName' => $request->publicName,
            'address' => $request->address,
            'city' => $request->city,
            'type' => $request->type
        ]);
    }
}
