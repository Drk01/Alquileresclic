<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class FacebookController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            
            $user = User::firstOrCreate(
                ['name' => $user->getName()],
                [
                    'name' => $user->getName(),
                    'lastname' => $user->getName(),
                    'mothersLastname' => $user->getName(),
                    'password' => bcrypt(Str::random(20)),
                    'phone' => 'Sin número telefónico registrado',
                    'email' => 'Sin correo electrónico registrado'
                ]
            );

            Auth::login($user, true);

            return redirect(route('home'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
