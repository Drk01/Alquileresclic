<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class FacebookController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $user = User::firstOrCreate(
            ['email' => $user->getEmail()],
            [
                'name' => $user->getName(),
                'lastname' => $user->getName(),
                'mothersLastname' => $user->getName(),
                'password' => bcrypt(Str::random(20))
            ]
        );

        Auth::login($user, true);

        return redirect(route('home'));
    }
}
