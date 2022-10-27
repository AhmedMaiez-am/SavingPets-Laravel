<?php

namespace App\Http\Controllers;

use App\Http\Requests\SterilisationRequest;
use App\Models\Sterilisation;
use App\Models\Vaccin;
use Illuminate\Http\Request;

class SterilisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sterilisations = Sterilisation::all();
        return view("sterilisations.index", compact("sterilisations"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vaccins = Vaccin::all();
        return view("sterilisations.edit", compact("vaccins"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SterilisationRequest $request)
    {

        $validated=$request->validated();
        $sterilisation = Sterilisation::create($request->all());

        $sterilisation->vaccin_id  = $request->vaccin_id;


        return redirect(route("sterilisations.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sterilisation  $sterilisation
     * @return \Illuminate\Http\Response
     */
    public function show(Sterilisation $sterilisation)
    {
        return view("sterilisations.show", compact("sterilisation"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sterilisation  $sterilisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Sterilisation $sterilisation)
    {
        $vaccins = Vaccin::all();
        return view("sterilisations.edit", compact("sterilisation", "vaccins"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sterilisation  $sterilisation
     * @return \Illuminate\Http\Response
     */
    public function update(SterilisationRequest $request, Sterilisation $sterilisation)
    {
        $validated=$request->validated();

        $sterilisation->update([
            "libelle" => $request->libelle,
            "responsable" => $request->responsable,
            "description" => $request->description,
            "date" => $request->date,
            "vaccin_id" => $request->vaccin_id,
        ]);

        return redirect(route("sterilisations.show", $sterilisation));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sterilisation  $sterilisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sterilisation $sterilisation)
    {
        $sterilisation->delete();

        return redirect(route('sterilisations.index'));
    }

         /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function details($vaccin_id)
    {
        $vaccin=Vaccin::find($vaccin_id);
        return redirect(route("vaccins.show", $vaccin));
    }

}
