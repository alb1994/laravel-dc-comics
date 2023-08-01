<?php

// Importa il controller ComicController dalla directory "App\Http\Controllers" e gli assegna l'alias "ComicController"
use App\Http\Controllers\ComicController as ComicController;

// Importa la classe "Route" dal framework Laravel, che consente di definire le rotte dell'applicazione
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Qui è possibile registrare le rotte web per l'applicazione. Queste rotte
| vengono caricate dal RouteServiceProvider all'interno di un gruppo (middleware group) chiamato "web".
| Ora crea qualcosa di fantastico!
|
*/

// Definisce una rotta di tipo GET per la homepage dell'applicazione ("/")
Route::get('/', function () {
    // Restituisce la vista chiamata 'home'
    return view('home');
});

// Definisce una risorsa "comic", che abilita le rotte standard per le operazioni CRUD relative ai fumetti
Route::resource('comics', ComicController::class);