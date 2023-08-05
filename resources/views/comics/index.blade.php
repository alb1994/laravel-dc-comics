@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Elenco dei Fumetti</h1>
                <a href="{{ route('comics.create') }}" class="btn btn-primary mb-3">Aggiungi fumetto</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Serie</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comics as $comic)
                            <tr>
                                <td>{{ $comic->title }}</td>
                                <td>{{ $comic->series }}</td>
                                <td>
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Dettagli</a>
                                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary btn-sm">Modifica</a> 
                                    <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" onsubmit="return confirm('Eliminare definitivamente il fumetto?')" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection