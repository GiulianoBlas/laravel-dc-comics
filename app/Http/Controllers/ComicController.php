<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{

    // Display a listing of the resource in the home page

    public function home()
    {

        $comics = Comic::all();

        return view('partials.home', compact('comics'));

    }
    
    // Display a listing of the resource.
     
    public function index()
    {

        $comics = Comic::all();

        return view('admin.comics.index', compact('comics'));

    }

    
    // Show the form for creating a new resource.
     
    public function create()
    {

        return view('admin.comics.create');

    }

    
    // Store a newly created resource in storage.
     
    public function store(Request $request)
    {
        
        $formData = $request -> all();

        $newComic = new Comic;

        $newComic -> title = $formData['title'];

        $newComic -> description = $formData['description'];

        $newComic -> thumb = $formData['thumb'];

        $newComic -> price = $formData['price'];

        $newComic -> series = $formData['series'];

        $newComic -> sale_date = $formData['sale_date'];

        $newComic -> type = $formData['type'];

        $newComic -> artists= $formData['artists'];

        $newComic -> writers= $formData['writers'];

        $newComic -> save();
        
        return redirect()->route('comics.index');
        
    }

    
    // Display the specified resource.
     
    public function show(string $id)
    {

        $comic = Comic::findOrFail($id);

        return view('admin.comics.show', compact('comic'));

    }

    
    // Show the form for editing the specified resource.
    
    public function edit(string $id)
    {

        $comic = Comic::findOrFail($id);

        return view('admin.comics.edit', compact('comic'));
        
    }

    
    // Update the specified resource in storage.
     
    public function update(Request $request, string $id)
    {
        
        $comic = Comic::findOrFail($id);

        $formData = $request -> all();

        $comic -> title = $formData['title'];

        $comic -> description = $formData['description'];

        $comic -> thumb = $formData['thumb'];

        $comic -> price = $formData['price'];

        $comic -> series = $formData['series'];

        $comic -> sale_date = $formData['sale_date'];

        $comic -> type = $formData['type'];

        $comic -> artists= $formData['artists'];

        $comic -> writers= $formData['writers'];

        $comic -> save();
        
        return redirect()->route('comics.index');

    }

    
    // Remove the specified resource from storage.
     
    public function destroy(string $id)
    {
        
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');

    }
}