<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Axe;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Affiche la liste des projets
    public function index()
    {
        $projects = Project::take(6)->get();
        return view('users.project', compact('projects'));
    }

    public function about()
    {
        $axes = Axe::all(); // récupère tous les axes
        return view('users.about', compact('axes'));
}

    // Affiche les détails d’un projet
    public function show($id)
    {
        $project = Project::findOrFail($id);

        // Projet précédent (ID inférieur)
        $previous = Project::where('id', '<', $id)->orderBy('id', 'desc')->first();

        // Projet suivant (ID supérieur)
        $next = Project::where('id', '>', $id)->orderBy('id', 'asc')->first();

        $projects = Project::where('id', '!=', $id)->get();

        return view('users.projetdetails', compact('project', 'projects', 'previous', 'next'));
    }


    // (Optionnel) Formulaire d’ajout
    public function create()
    {
        return view('projects.create');
    }

    // (Optionnel) Enregistrement du projet
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'storage/' . $imagePath,
        ]);

        return redirect()->route('projects.index')->with('success', 'Projet ajouté avec succès.');
    }
}

