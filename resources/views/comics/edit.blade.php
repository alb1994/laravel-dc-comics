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

                            <!-- Aggiungi gli altri campi del form con i valori correnti del fumetto -->

                            <button type="submit" class="btn btn-primary">Salva modifiche</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection