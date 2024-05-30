@extends('layout.app')

@section('content')


<h1>Modifica il tuo fumetto: {{$comic->title}}</h1>
    <form action="{{ route('update', $comic) }}" method="POST">
     <!-- Cross Site Request Foreing -->
        @csrf
        <!--  metodo put = metodo post -->
        @method('PUT') 
        <div class="form-group text-start mb-3">
            <label for="text">Titolo</label>
            <input type="text" name="title" class="form-control" id="text" aria-describedby="emailHelp" value="{{$comic->title}}" placeholder="titolo del fumetto">
            <label for="descr">Descrizione</label>
            <input type="text" class="form-control" name="description" id="descr" value="{{$comic->description}}" placeholder="descrizioone">
            <label for="image">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="image" value="{{$comic->thumb}}"placeholder="URL http://...">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" name="price" id="price"value="{{$comic->price}}" placeholder="prezzo">
            <label for="sale">Data di uscita</label>
            <input type="text" class="form-control" name="sale_date" id="sale" value="{{$comic->sale_date}}" placeholder="data di uscita">
            <label for="series">Serie</label>
            <input type="text" class="form-control" name="series" id="series" value="{{$comic->series}}" placeholder="series">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" name="type" value="{{$comic->type}}" id="type" placeholder="tipo">
           
        </div>
      
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>






@endsection