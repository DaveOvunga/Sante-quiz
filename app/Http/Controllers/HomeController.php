<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OtherProject;

class HomeController extends Controller
{
    public function index(){
        return view('users.home');
    }    

    public function project()
    {
        return view('users.project');
    }

    public function projetdetails()
    {
        return view('users.projetdetails');
    }

    public function team()
    {
        // Récupère tous les projets depuis la base de données
        $projects = OtherProject::all();

        // Envoie les projets à la vue "team"
        return view('users.team', compact('projects'));
    }
    
    public function teamdetails()
    {
        return view('users.teamdetails');
    }

    public function service()
    {
        return view('users.service');
    }

     public function servicedetails()
    {
        return view('users.servicedetails');
    }

    public function news()
    {
        return view('users.news');
    }

    public function newsdetails($id)
    {
        // Trouve le projet correspondant à l’ID
        $project = OtherProject::findOrFail($id);

        // Passe les données à la vue
        return view('users.newsdetails', compact('project'));
    }

    public function contact()
    {
        return view('users.contact');
    }
    

}
