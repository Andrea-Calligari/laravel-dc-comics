@extends('layout.app');

@section('title', 'Show');


@section('content');
<div class="container text-center p-5">

    <h1>Show-page</h1>
</div>
<div class="container">
    <div class="row">
        @foreach($comics as $comic)
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="fw-bold fs-5 py-3">{{$comic['title']}}</div class="fw-bold">
                        <img class="card-img-top" src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="card-body">
                        <div class="py-3 "><div class="fw-bold">Descrizione:</div> {{$comic['description']}}</div>
                        <div class="fw-bold fs-4">Prezzo: {{$comic['price']}}</div>
                        <div class="fw-bold fs-4">Data di uscita: {{$comic['sale_date']}}</div>
                        <div class="fw-bold fs-4">Genere: {{$comic['type']}}</div>
                        <div class="fw-bold fs-4">Serie: {{$comic['series']}}</div>

                    </div>

                </div>
                
                    
                </ul>
            </div>
        @endforeach

    </div>
</div>

@endsection