@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <label for="title">Titolo:</label>
                    <input type="text" id="title" name="title" placeholder="Titolo">
                    <label for="series">Serie:</label>
                    <input type="text" id="series" name="series" placeholder="Serie">
                    <label for="price">Prezzo:</label>
                    <input type="text" id="price" name="price" placeholder="Prezzo">
                    <label for="type">Tipo:</label>
                    <input type="text" id="type" name="type" placeholder="Tipo">
                    <button type="submit">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>
@endsection