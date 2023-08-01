@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Elenco dei Fumetti</h1>
                <a href="{{route('comics.create')}}">Aggiungi fumetto</a>
                <hr>
                <div class="row">
                    @foreach($comics as $comic)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                <img src="{{$comic->thumb}}" class="img-fluid mb-4" alt="Copertina del fumetto">
                                    <p class="card-text"><strong>Serie:</strong> {{$comic->series}}</p>
                                    <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-primary">Dettagli</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection