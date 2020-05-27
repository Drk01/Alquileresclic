<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use App\Image;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        //Validando que llegaron todos los datos:
        $validador = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'category' => ['required'],
            'cost' => ['required'],
            'currency' => ['required'],
            'period' => ['required'],
            'negotiable' => ['required'],
            'images' => ['required']
        ]);

        //Obteniendo el usuario que crea el anuncio.
        $usuario = User::find(auth()->user()->id);

        if ($usuario->profile->remaining_ads <= 0) {
            return redirect(route('home'))->with('dangerMessage', 'No tiene suficientes créditos de anuncios');
        }

        try {
            //Creando el anuncio:
            $anuncio = new Ad;
            $anuncio->title = $request->title;
            $anuncio->description = $request->description;
            $anuncio->cost = $request->cost;
            $anuncio->currency = $request->currency;
            $anuncio->period = $request->period;

            if ($request->negotiable === "Si") {
                $anuncio->negotiable = true;
            } else {
                $anuncio->negotiable = false;
            }

            $anuncio->code = Str::random(6);
            $anuncio->profile_id = $usuario->profile()->first()->id;
            $anuncio->save();

            // Salvar las imágenes del anuncio.

            foreach ($request->images as $image) {
                $path =  $image->store('ads');
                $image = new Image([
                    'image_link' => $path
                ]);
                $anuncio->images()->save($image);
            }

            //Restar token de anuncio.
            $usuario = Profile::where('user_id', auth()->user()->id)->first();
            $usuario->remaining_ads = $usuario->remaining_ads - 1;
            $usuario->save();

            return redirect(route('home'))->with('message',  'Su anuncio ha sido enviado a moderación');
        } catch (\Throwable $th) {
            return response($th);
        }
    }
}
