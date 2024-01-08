<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\Chauffeur;

class ChauffeurController extends Controller
{
    public function index()
    {
        $chauffeurs = Chauffeur::all();
        return view('chauffeur.index', compact('chauffeurs'));
    }

    public function create()
    {
        return view('chauffeurs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firtName' => 'required',
            'lastName' => 'required',
            'dateOfBirth' => 'required',
        ]);
        Chauffeur::create($request->post());
        return redirect()->route('cars.index')
            ->with('success', 'Chauffeur created successfully.');
    }

    public function show(Chauffeur $chauffeur)
    {
        return view('chauffeurs.show', compact('chauffeur'));
    }

    public function edit(Car $chauffeur)
    {
        return view('chauffeurs.edit', compact('chauffeur'));
    }

    public function update(Request $request, string $id)
    {
        $chauffeur = Chauffeur::findOrFail($id);
        $chauffeur->update($request->all());

        return redirect()->route('chauffeurs.index')
            ->with('status', 'Chauffeur updated successfully');
    }

    public function destroy(string $id)
    {
        $chauffeur = Chauffeur::findOrFail($id);
        $chauffeur->delete();

        return redirect()->route('chauffeurs.index')
            ->with('success', 'Chauffeur deleted successfully');
    }
}
