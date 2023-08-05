@extends('layouts.app')

@section('content')
<a href="{{ route('comics.index') }}" class="btn btn-secondary mb-3">Torna all'elenco dei fumetti</a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Modifica fumetto: {{ $comic->title }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Titolo:</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Titolo" value="{{ old('title', $comic->title) }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="series">Serie:</label>
                                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Serie" value="{{ old('series', $comic->series) }}">
                                @error('series')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">Prezzo:</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Prezzo" value="{{ old('price', $comic->price) }}">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Descrizione:</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Descrizione">{{ old('description', $comic->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="sale_date">Anno uscita:</label>
                                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Anno uscita" value="{{ old('sale_date', $comic->sale_date) }}">
                                @error('sale_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Salva modifiche</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection