<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {

         $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }
    public function create()
    {
        return view('comics.create');
    }
    public function store(Request $request)
    {
        //da questa istanza utilizziamo un metodo 
        $form_data = $request->all();

        //creiamo l'istanza
        // $new_comic = new Comic();

        //popoliamo l'istanza con i dati arrivati dal form
        // $new_comic->title = $form_data['title'];
        //... ecc ecc

        // altro metodo con il create

        $new_comic = Comic::create($form_data);

        //salviamo l'istanza ->save();
        $new_comic->save();

        //redirect alla rotta show di comics
        // return redirect()->route('pages.show', $new_comic);
        return redirect()->route('show', $new_comic);
        // dump($form_data);
    }
    public function edit(Comic $comic)
    {
        return view('comics.edit',compact('comic'));
    }
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        // dump($form_data);
        $comic->fill($form_data); // popola l'istanza sovrascrivndo - non fa il salvataggio 
        $comic->save(); // salvataggio 
        
        // $comic->update(); 
        //fa subito il fill e il salvataggio 
        //possiamo usarla se dobbiamo fare le due operazioni insieme. Seno' prima utilizziamo il metodo fill() , facciamo quello che dobbiamo fare e poi il metodo save()
        return to_route('show', $comic);
    }
    public function destroy(Comic $comic)
    {
        
        $comic->delete();
        
        return to_route('index');
    }
}
