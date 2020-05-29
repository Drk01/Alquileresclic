<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['saveProfileChanges', 'toggleConfianza']);
        $this->middleware('isAdminToken')->only('toggleConfianza');
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

    public function changePassword(Request $request)
    {
        return view('panel.profiles.changePassword');
    }

    public function savePassword(Request $request)
    {

        //Realizando validación de campos.
        $request->validate([
            'oldPassword' => ['required'],
            'newPassword' => ['required', 'confirmed']
        ]);

        //Obteniendo usuario de la base de datos.
        $user = User::find(auth()->user()->id)->first();

        //Comprobando si la contraseña dada es la misma que la de la base de datos.
        if ($user->password === bcrypt($request->oldPassword)) {
            $user->password = bcrypt($request->newPassword);
            $user->save();
        } else {
            return redirect(route('home'))->with('dangerMessage', 'Contraseña incorrecta');
        }

        return redirect(route('home'))->with('message', 'Contraseña cambiada satisfactoriamente');
    }

    public function toggleConfianza(Request $request)
    {
        $user = User::findOrfail($request->id);
        $user->confianza = !$user->confianza;
        $user->save();
    }
}
