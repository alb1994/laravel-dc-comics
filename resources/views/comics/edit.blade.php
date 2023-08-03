@extends('layouts.app')

@section('content')
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
                                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ $comic->title }}">
                            </div>

                            <div class="form-group">
                                <label for="series">Serie:</label>
                                <input type="text" class="form-control" id="series" name="series" placeholder="Serie" value="{{ $comic->series }}">
                            </div>

                            <div class="form-group">
                                <label for="price">Prezzo:</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo" value="{{ $comic->price }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Descrizione:</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Descrizione" value="{{ $comic->description }}">
                            </div>

                            <div class="form-group">
                                <label for="sale_date">Anno uscita:</label>
                                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Anno uscita" value="{{ $comic->sale_date }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Salva modifiche</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection