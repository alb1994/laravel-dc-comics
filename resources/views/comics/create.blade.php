@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Aggiungi un nuovo fumetto</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('comics.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Titolo:</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
                            </div>

                            <div class="form-group">
                                <label for="series">Serie:</label>
                                <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
                            </div>

                            <div class="form-group">
                                <label for="price">Prezzo:</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo">
                            </div>

                            <div class="form-group">
                                <label for="type">Tipo:</label>
                                <input type="text" class="form-control" id="type" name="type" placeholder="Tipo">
                            </div>

                            <div class="form-group">
                                <label for="thumb">URL Thumbnail 1:</label>
                                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="URL Thumbnail 1">
                            </div>

                            <div class="form-group">
                                <label for="thumb2">URL Thumbnail 2:</label>
                                <input type="text" class="form-control" id="thumb2" name="thumb2" placeholder="URL Thumbnail 2">
                            </div>

                            <div class="form-group">
                                <label for="sale_date">Data di uscita:</label>
                                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Data di uscita">
                            </div>

                            <div class="form-group">
                                <label for="description">Descrizione:</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Descrizione"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Aggiungi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection