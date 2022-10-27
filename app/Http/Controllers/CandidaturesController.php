<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidatures;
use App\Models\Departements;


class CandidaturesController extends Controller
{
    public function index()
    {
        $students = Candidatures::all();
        return view('candidatures.index')->with('candidatures', $students);
    }

    public function create()
    {
        $departements = Departements::all();
        return view('candidatures.create', compact("departements"));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'position' => 'required',
        ]);
        $candi = Candidatures::create($input);
        $candi->id_dep = $request->id_dep;
        return redirect('candidatures')->with('flash_message', 'Candidature Addedd!');
    }

    public function show($id)
    {
        $student = Candidatures::find($id);
        return view('candidatures.index')->with('candidatures', $student);
    }

    public function edit($id)
    {
        $student = Candidatures::find($id);
        return view('candidatures.edit')->with('candidatures', $student);
    }

    public function update(Request $request, $id)
    {
        $student = Candidatures::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('candidatures')->with('flash_message', 'Candidature Updated!');
    }

    public function destroy($id)
    {
        Candidatures::destroy($id);
        return redirect('candidatures')->with('flash_message', 'Candidature deleted!');
    }
}