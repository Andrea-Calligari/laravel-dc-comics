<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {

        // $comics = Comic::all();

        return view('pages.index');
    }
    public function show(Comic $comics)
    {

        $comics = config('comics');
        return view('pages.show', compact('comics'));
    }
    public function create()
    {
        return view('pages.create');
    }
    public function store()
    {
        dump('Metodo-Store');
    }
}
