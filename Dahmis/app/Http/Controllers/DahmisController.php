<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamme;
use App\Entreprise;
use App\Nouvelle;

class DahmisController extends Controller
{
    public function page()
    {
        $gam=Gamme::all();
        $nou=Nouvelle::all();
        $ent = Entreprise::all();
        return view('projet.master',compact('gam','nou','ent'));
    }
    public function getImages()
    {
        // Récupérez toutes les images depuis la base de données
        $images = Entreprise::all()->map(function($image) {
            $image->url = asset('storage/'.$image->image);  // Créer l'URL complète
            return $image;
        });
        return response()->json($images); // Renvoyer les images en format JSON
    }
}
