<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departements;

class DepartementsController extends Controller
{
    public function index()
    {
        $students = Departements::all();
        return view('departements.index')->with('departements', $students);
    }

    public function create()
    {
        return view('departements.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'Nom' => 'required',
            'Desc' => 'required',
            'Capacite' => 'required',

        ]);
        Departements::create($input);
        return redirect('departements')->with('flash_message', 'Département Addedd!');
    }

    public function show($id)
    {
        $student = Departements::find($id);
        return view('departements.index')->with('departements', $student);
    }

    public function edit($id)
    {
        $student = Departements::find($id);
        return view('departements.edit')->with('departements', $student);
    }

    public function update(Request $request, $id)
    {
        $student = Departements::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('departements')->with('flash_message', 'Departement Updated!');
    }

    public function destroy($id)
    {
        Departements::destroy($id);
        return redirect('departements')->with('flash_message', 'Departement deleted!');
    }
}