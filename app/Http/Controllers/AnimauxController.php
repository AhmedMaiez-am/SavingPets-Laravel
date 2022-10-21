<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animaux;

class AnimauxController extends Controller
{
   
    public function index()
    {
        $animaux = Animaux::all();
        return view('animaux.index')->with('animaux',$animaux);
    }

    
    public function create()
    {
        return view('animaux.create');
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
        Animaux::create($input);
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
