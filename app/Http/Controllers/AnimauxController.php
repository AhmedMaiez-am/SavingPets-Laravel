<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animaux;
use App\Models\Locaux;

class AnimauxController extends Controller
{
   
    public function index()
    {
        $animaux = Animaux::all();
        return view('animaux.index')->with('animaux',$animaux);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function details($idLoc)
    {
        $local=Locaux::find($idLoc);
        return view('animaux.show')->with('local',$local);
        
    }


    
    public function create()
    {

        $locaux = Locaux::all();
        
        return view('animaux.create', compact("locaux"));
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'ref' => 'required',
            'age' => 'required',
            'race' => 'required',
            'type' => 'required',
        ]);
        $Animaux=Animaux::create($input);
        $Animaux->idLoc=$request->idLoc;
        return redirect('animaux')->with('flash_message', 'Animaux Addedd!');  
    }

   
    public function show($id)
    {
      
        $animaux = Animaux::find($id);
        return view('animaux.show')->with('animaux',$animaux);
    }

   

   
    public function edit($id)
    {
        $animaux = Animaux::find($id);
        return view('animaux.edit')->with('animaux',$animaux);
    }

  
    public function update(Request $request, $id)
    {
        $animaux = Animaux::find($id);
        $input = $request->all();
        $animaux->update($input);
        return redirect('animaux')->with('flash_message', 'Animaux Updated!');  
    }

   
    public function destroy($id)
    {
        Animaux::destroy($id);
        return redirect('animaux')->with('flash_message', 'Student deleted!');
    }
}
