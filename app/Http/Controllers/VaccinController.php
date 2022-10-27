<?php

namespace App\Http\Controllers;

use App\Models\Vaccin;
use Illuminate\Http\Request;

class VaccinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //On récupère tous les vaccin
    $vaccins = Vaccin::get();

    // On transmet les vaccins à la vue
    return view("vaccins.index", compact("vaccins"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("vaccins.edit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // 1. La validation
    $this->validate($request, [
        'titre' => 'bail|required|string',
        "type" => 'bail|required|string',
        "date_création" => 'bail|required',
        "date_expiration" => 'bail|required',
    ]);


    // 2. On enregistre les informations du vaccin
    Vaccin::create([
        "titre" => $request->titre,
        "type" => $request->type,
        "date_création" => $request->date_création,
        "date_expiration" => $request->date_expiration,
    ]);

    // 3. On retourne vers tous les vaccins : route("vaccins.index")
    return redirect(route("vaccins.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccin $vaccin)
    {
        return view("vaccins.show", compact("vaccin"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccin $vaccin)
    {
        return view("vaccins.edit", compact("vaccin"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccin $vaccin)
    {
            // 1. La validation

    // Les règles de validation pour les champs
    $rules = [
        'titre' => 'bail|required|string',
        "type" => 'bail|required|string',
        "date_création" => 'bail|required',
        "date_expiration" => 'bail|required',
    ];


    // 2. On met à jour les informations du vaccin
    $vaccin->update([
        "titre" => $request->titre,
        "type" => $request->type,
        "date_création" => $request->date_création,
        "date_expiration" => $request->date_expiration,
    ]);

    // 3. On affiche le vaccin modifié : route("vaccins.show")
    return redirect(route("vaccins.show", $vaccin));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccin $vaccin)
    {


    // On les informations du $vaccin de la table "vaccins"
    $vaccin->delete();

    // Redirection route "vaccins.index"
    return redirect(route('vaccins.index'));
    }


}
