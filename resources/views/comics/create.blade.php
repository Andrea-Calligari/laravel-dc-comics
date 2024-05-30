@extends('layout.app');

@section('title', 'Create');


@section('content');
<div class="container text-center">

    <h1>Crea un nuovo fumetto</h1>
    <form action="{{ route('store') }}" method="POST">

        @csrf
        <div class="form-group text-start mb-3">
            <label for="text">Titolo</label>
            <input type="text" name="title" class="form-control" id="text" aria-describedby="emailHelp" placeholder="titolo del fumetto">
            <label for="descr">Descrizione</label>
            <input type="text" class="form-control" name="description" id="descr" placeholder="descrizioone">
            <label for="image">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="image" placeholder="URL http://...">
            <label for="price">Prezzo</label>
            <input type="number"  name="price" id="price" placeholder="prezzo">
            <label for="sale">Data di uscita</label>
            <input type="text" class="form-control" name="sale_date" id="sale" placeholder="data di uscita">
            <label for="series">Serie</label>
            <input type="text" class="form-control" name="series" id="series" placeholder="series">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="tipo">
           
        </div>
      
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>

@endsection