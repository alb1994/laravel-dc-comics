@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$comic->title}}</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Titolo:</strong> {{$comic->title}}</p>
                        <p><strong>Genere:</strong> {{$comic->type}}</p>
                        <p><strong>Prezzo:</strong> {{$comic->price}}</p>
                        <p><strong>Descrizione:</strong> {{$comic->description}}</p>
                        <p><strong>Data di uscita:</strong> {{$comic->sale_date}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


