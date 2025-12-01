<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $photos = collect(glob(public_path('projectImage/image/*.{jpg,png,jpeg,gif}'), GLOB_BRACE))
        ->map(function ($path) {
            $relative = str_replace(public_path(), '', $path);
            $relative = str_replace('\\', '/', $relative);
            return ltrim($relative, '/');
        });


        return view('users.galery', compact('photos'));
    }

}
