<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){

        $comics = Comic::all();
        
        return view('pages.index', compact('comics'));
    }
    public function show(Comic $comic){
        return view('pages.show', compact('comic'));
    }
    public function create(){
        return view('pages.create');
    }
}
