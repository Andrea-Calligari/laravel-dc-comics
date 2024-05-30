@extends('layout.app');

@section('title', 'Index');


@section('content');
<div class="container text-center">

    <h1>index.page</h1>

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)

                <div class="col-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <div class="fw-bold fs-5 py-3">
                                <a href="{{route('show', $comic)}}">{{ $comic->title }}</a>
                            </div>
                            <a href="{{route('edit', $comic)}}">Modifica</a>
                            <form action="{{route('destroy', $comic)}}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-link link-danger">Elimina</button>

                            </form>
                        </div>
                        <div class="card-body">
                            <div class="py-3 ">
                                <div class="fw-bold">Descrizione: {{$comic->description}}</div>
                            </div>
                            <div class="fw-bold fs-4">Prezzo: {{ $comic->price }}</div>
                            <div class="fw-bold fs-4">Data di uscita: {{ $comic->sale_date }}</div>
                            <div class="fw-bold fs-4">Genere: {{ $comic->type}}</div>
                            <div class="fw-bold fs-4">Serie: {{ $comic->series }}</div>

                        </div>

                    </div>
                </div>

            @endforeach
        </div>


    </div>

    @endsection