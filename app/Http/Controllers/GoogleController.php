<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        $user = User::firstOrCreate(
            ['email' => $user->getEmail()],
            [
                'name' => $user->getName(),
                'lastname' => $user->getName(),
                'mothersLastname' => $user->getName(),
                'password' => bcrypt(Str::random(20)),
                'phone' => 'Inserte su número telefónico'
            ]
        );

        Auth::login($user, true);

        return redirect(route('home'));
    }
}
