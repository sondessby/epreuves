<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Epreuve;

class EprController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $epreuves=Epreuve::all();
        //dd($epreuves);
        return view("epreuves.index",compact("epreuves"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("epreuves.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $request->validate([
            'numepreuve' => 'required|string',
            'datepreuve' => 'required',
            'lieu' => 'required',
        ]);
        $epreuve = Epreuve::create([
            'numepreuve' => $request->numepreuve,
            'datepreuve' => $request->datepreuve,
            'lieu' => $request->lieu,
            
        ]);
    
        $epreuve->save();
        // Redirect back or to a specific route after successful submission
        return redirect()->route('epreuves.index')->with('success', 'le epreuve  created successfully');
    }

    /**
     * Display the specified resource.
     */
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
