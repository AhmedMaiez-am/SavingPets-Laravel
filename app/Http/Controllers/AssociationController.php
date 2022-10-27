<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //On récupère tous les Post
        // $associations = Association::latest()->get();
        $associations = Association::all();
        // On transmet les Post à la vue
        return view('associations.index')->with('associations',$associations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('associations.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Association::create($input);
        return redirect('associations')->with('flash_message', 'Association Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $association = Association::find($id);
        return view('associations.show')->with('associations', $association);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $association = Association::find($id);
        return view('associations.edit')->with('associations', $association);
    }
  
    public function update(Request $request, $id)
    {
        $association = Association::find($id);
        $input = $request->all();
        $association->update($input);
        return redirect('associations')->with('flash_message', 'association Updated!');  
    }
  
    public function destroy($id)
    {
        Association::destroy($id);
        return redirect('associations')->with('flash_message', 'association deleted!');  
    }
}
