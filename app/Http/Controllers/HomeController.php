<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('users.team');
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

    public function newsdetails()
    {
        return view('users.newsdetails');
    }

    public function contact()
    {
        return view('users.contact');
    }
    

}
