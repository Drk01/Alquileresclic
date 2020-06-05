<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use App\Favorite;
use App\Image;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('rejectAd', 'acceptAd', 'saveAdChanges');
        $this->middleware('hasCreatedProfile')->except('getAdsForm', 'rejectAd', 'acceptAd', 'saveAdChanges');
        $this->middleware('isAdmin&SuperToken')->only('rejectAd', 'acceptAd');
    }

    public function getAdsForm()
    {
        $ads = Ad::where('status', 'En moderación')->get();
        return view('panel.ads.list', compact('ads'));
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
            $anuncio->slug = Str::slug($request->title, '-');

            if ($request->negotiable === "Si") {
                $anuncio->negotiable = true;
            } else {
                $anuncio->negotiable = false;
            }

            $anuncio->code = Str::random(3) . rand(0, 999);
            $anuncio->slug = 'alquiler-de-' . Str::slug($request->title, '-').$anuncio->code;
            $anuncio->profile_id = $usuario->profile()->first()->id;
            $anuncio->save();

            // Salvar las imágenes del anuncio.

            foreach ($request->images as $image) {
                $path =  $image->store('ads');
                Storage::setVisibility($path, 'public');
                $image = new Image([
                    'image_link' => $path
                ]);
                $anuncio->images()->save($image);
            }

            //Restar token de anuncio.
            $usuario = Profile::where('user_id', auth()->user()->id)->first();
            $usuario->remaining_ads = $usuario->remaining_ads - 1;
            $usuario->save();

            return redirect(route('home'))->with('message',  'Su anuncio está en revisión, en breve será publicado');
        } catch (\Throwable $th) {
            return response($th);
        }
    }

    public function rejectAd(Request $request)
    {
        Ad::find($request->id)->update(['status' => 'Rechazado']);
    }

    public function acceptAd(Request $request)
    {
        Ad::find($request->id)->update(['status' => 'Aprobado']);
    }

    public function getMyAds()
    {
        $ads = Ad::where('profile_id', auth()->user()->profile->id)->get();
        return view('panel.ads.myAds', compact('ads'));
    }

    public function saveAdChanges(Request $request)
    {
        $ad = Ad::findOrfail($request->id);
        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->currency = $request->currency;
        $ad->period = $request->period;
        $ad->cost = $request->cost;

        if ($request->negotiable == 'Sí') {
            $ad->negotiable = true;
        } else {
            $ad->negotiable = false;
        }
        $ad->save();
    }

    public function getMyFavorites()
    {
        $favorites = Favorite::where('user_id', auth()->user()->id)->get();
        return view('panel.ads.showMyFavorites', compact('favorites'));
    }
}
