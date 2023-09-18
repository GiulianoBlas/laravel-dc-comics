<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{

    // Display a listing of the resource in the home page

    public function home()
    {

        $comics = Comic::all();

        return view('partials.home', compact('comics'));

    }

    public function singleComic(string $id)
    {

        $comic = Comic::findOrFail($id);

        return view('partials.single-comic', compact('comic'));

    }

}
