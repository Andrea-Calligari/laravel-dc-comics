<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {

         $comics = Comic::all();

        return view('pages.index', compact('comics'));
    }
    public function show(Comic $comic)
    {
        return view('pages.show', compact('comic'));
    }
    public function create()
    {
        return view('pages.create');
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
        return view('pages.edit',compact('comic'));
    }
}
