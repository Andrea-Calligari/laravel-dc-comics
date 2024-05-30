@extends('layout.app');

@section('title', 'Show');


@section('content');
<div class="container text-center p-5">

    <h1>Show-page</h1>
</div>
    <h1>titolo: {{ $comic->title }}</h1>
    <h1>Descrizione: {{ $comic->description }}</h1>
    <h1>Immagine: {{ $comic->thumb }}</h1>
    <h1>Prezzo: {{ $comic->price }}</h1>
    <h1>data di rilascio: {{ $comic->sale_date }}</h1>
    <h1>Tipo: {{ $comic->type }}</h1>
</div>
</div>

@endsection