@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                
                <h4 class="card-title">{{$comic->title}}</h4>
                <h1>{{$comic->title}}</h1>
                <p><strong>Genere:</strong> {{$comic->type}}</p>
                <p><strong>Prezzo:</strong> {{$comic->price}}</p>
                <p><strong>Descrizione:</strong> {{$comic->description}}</p>
                <p><strong>Data di uscita:</strong> {{$comic->sale_date}}</p>
            </div>
        </div>
    </div>
@endsection