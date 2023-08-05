@extends('layouts.app')

@section('content')
    <a href="{{ route('comics.index') }}" class="btn btn-secondary mb-3">Torna all'elenco dei fumetti</a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <!-- Mostra l'immagine della copertina del fumetto -->
                        <img src="{{ $comic->thumb }}" class="img-fluid mb-4" alt="Copertina del fumetto">
                        <!-- Mostra il titolo del fumetto -->
                        <h4 class="card-title">{{ $comic->title }}</h4>
                    </div>
                    <div class="card-body">
                        <!-- Mostra i dettagli del fumetto -->
                        <p><strong>Titolo:</strong> {{ $comic->title }}</p>
                        <p><strong>Serie:</strong> {{ $comic->series }}</p>
                        <p><strong>Genere:</strong> {{ $comic->type }}</p>
                        <p><strong>Prezzo:</strong> {{ $comic->price }}</p>
                        <p><strong>Descrizione:</strong> {{ $comic->description }}</p>
                        <p><strong>Data di uscita:</strong> {{ $comic->sale_date }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


