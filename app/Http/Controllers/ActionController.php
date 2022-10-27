<?php

namespace App\Http\Controllers;
use App\Models\Association;
use App\Models\Action;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $actions= Action::all();
        // On transmet les Post à la vue
        return view('actions.index')->with('actions',$actions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $associations = Association::all();

        return view('actions.create')->with('associations',$associations);;

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

        $action = Action::create($input);
        $action->association_id = $request->association_id;
        // $input = $request->all();
        // $action = Action::create($input);
        // $association = Association::all();
        // $action->associations()->attach($association);

         return redirect('actions')->with('flash_message', 'Action Addedd!');  
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $action = Action::find($id);
        return view('actions.show')->with('actions', $action);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = Action::find($id);
        return view('actions.edit')->with('actions', $action);
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
        $action = Action::find($id);
        $input = $request->all();
        $action->update($input);
        return redirect('actions')->with('flash_message', 'action Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Action::destroy($id);
        return redirect('actions')->with('flash_message', 'action deleted!');  
    }
}
