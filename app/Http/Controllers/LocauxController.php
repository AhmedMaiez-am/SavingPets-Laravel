<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locaux;

class LocauxController extends Controller
{
    
    public function index()
    {
        $locaux = Locaux::all();
        return view('locaux.index')->with('locaux',$locaux);
    }

   
    public function create()
    {
        return view('locaux.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Locaux::create($input);
        return redirect('locaux')->with('flash_message', 'Locaux Addedd!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $locaux = Locaux::find($id);
        return view('locaux.show')->with('locaux',$locaux);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $locaux = Locaux::find($id);
        return view('locaux.edit')->with('locaux',$locaux);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $locaux = Locaux::find($id);
        $input = $request->all();
        $locaux->update($input); 
        return redirect('locaux')->with('flash_message', 'locaux Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Locaux::destroy($id);
        return redirect('locaux')->with('flash_message', 'locaux deleted!'); 
    }
}
