<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    
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
        

        $request->validate([

            'title' => 'required|max:128',

            'description' => 'required',

            'thumb'=> 'nullable',

            'price' => 'required|numeric|max:999.99',

            'series'=> 'required|max:128|min:0|max:1000',

            'sale_date' => 'nullable|date',

            'type' => 'required|max:50',

            'artists' => 'required',

            'writers' => 'required',

        ],
        [

            'title.required' => 'Il titolo é obbligatorio',

            'title.max' => 'Il titolo puó avere al massimo 128 caratteri',

            'description.required' => 'La descrizione é obbligatoria',

            'price.required' => 'Il prezzo é obbligatorio',

            'price.max' => 'Prezzo massimo 999.99',

            'series.required' => 'La serie é obbligatoria',

            'series.max' => 'La serie puó avere al massimo 128 caratteri',

            'sale_date.date' => 'Inserisci una data valida',

            'type.required' => 'Il tipo é obbligatorio',

            'type.max' => 'Il tipo puo avere al massimo 50 caratteri',

            'artists.required' => 'Inserisci artista/i',

            'writers.required' => 'Inserisci scrittore/i',

        ]
        );

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


        $request->validate([

            'title' => 'required|max:128',

            'description' => 'required',

            'thumb'=> 'nullable',

            'price' => 'required|numeric|max:999.99',

            'series'=> 'required|max:128|min:0|max:1000',

            'sale_date' => 'nullable|date',

            'type' => 'required|max:50',

            'artists' => 'required',

            'writers' => 'required',

        ],
        [

            'title.required' => 'Il titolo é obbligatorio',

            'title.max' => 'Il titolo puó avere al massimo 128 caratteri',

            'description.required' => 'La descrizione é obbligatoria',

            'price.required' => 'Il prezzo é obbligatorio',

            'price.max' => 'Prezzo massimo 999.99',

            'series.required' => 'La serie é obbligatoria',

            'series.max' => 'La serie puó avere al massimo 128 caratteri',

            'sale_date.date' => 'Inserisci una data valida',

            'type.required' => 'Il tipo é obbligatorio',

            'type.max' => 'Il tipo puo avere al massimo 50 caratteri',

            'artists.required' => 'Inserisci artista/i',

            'writers.required' => 'Inserisci scrittore/i',

        ]
        );
        
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
