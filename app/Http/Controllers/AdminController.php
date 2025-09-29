<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
    {
        // Vérifie que l'utilisateur est bien admin
        if (Auth::check() && Auth::user()->usertype == 1) {

            $user = User::count(); // Compte le nombre d'utilisateurs
            return view('admin.dashboard', compact('user')); // Crée cette vue dans resources/views/admin/dashboard.blade.php
        }

        // Sinon, redirige vers la page publique
        return redirect('/')->with('error', 'Accès non autorisé.');
    }
}
