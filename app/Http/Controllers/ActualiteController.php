<?php

namespace App\Http\Controllers;

use App\Models\Actualite;

class ActualiteController extends Controller
{
    public function index()
    {
        // $actualites = Actualite::latest()->paginate(6);
        // Afficher uniquement les 2 dernières actualités
        $actualites = Actualite::latest()->take(3)->get();

        return view('actualites.index', compact('actualites'));
    }

    public function show($id)
    {
        $actualite = Actualite::findOrFail($id);

        $latestPosts = Actualite::latest()
            ->where('id', '!=', $id)
            ->take(3) // le sidebar affiche 3 posts
            ->get();

        return view('actualites.show', compact('actualite', 'latestPosts'));
    }

}
