<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Support\Carbon;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
    
        $comic = new Comic();
        $comic->title = $form_data['title'];
        $comic->series = $form_data['series'];
        
        // Conversione del campo "price" in un valore numerico
        $comic->price = floatval(str_replace(',', '.', str_replace('.', '', $form_data['price'])));
    
        $comic->type = $form_data['type'];
        
        // Assicurati di gestire correttamente i campi "thumb" e "thumb2" se presenti nel form
        $comic->thumb = $form_data['thumb'] ?? '';
        $comic->thumb2 = $form_data['thumb2'] ?? '';
    
        // Gestisci correttamente il campo "description" se presente nel form
        $comic->description = $form_data['description'] ?? '';

        // Converti la data nel formato corretto "YYYY-MM-DD"
        $comic->sale_date = date('Y-m-d', strtotime($form_data['sale_date']));
    
        // Salva il nuovo fumetto nel database
        $comic->save();
    
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    // Mostra il form di modifica di un fumetto esistente.
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    // Aggiorna un fumetto esistente nel database
    public function update(Request $request, Comic $comic)
{
    $validatedData = $request->validate([
        'title' => 'required|string',
        'series' => 'required|string',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'sale_date' => 'required|date_format:Y-m-d',
    ]);

    $comic->update($validatedData);

    return redirect()->route('comics.show', $comic->id);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // Elimina un fumetto dal database.
        $comic->delete();
        return redirect()->route('comics.index');
    }
}