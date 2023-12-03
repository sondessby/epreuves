<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matieres=Matiere::all();
        //dd($matieres);
        return view("matieres.index",compact("matieres"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("matieres.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) { 
       // dd($request);
       $request->validate([
        'codemat' => 'required|string',
        'libelle' => 'required',
        'coef' => 'required',
    ]);
    $matiere = Matiere::create([
        'codemat' => $request->codemat,
        'libelle' => $request->libelle,
        'coef' => $request->coef,
        
    ]);

    $matiere->save();
    // Redirect back or to a specific route after successful submission
    return redirect()->route('matieres.index')->with('success', 'Matiere created successfully');
}
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
