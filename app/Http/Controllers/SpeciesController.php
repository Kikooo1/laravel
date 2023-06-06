<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Species;

class SpeciesController extends Controller
{
    public function index()
    {
        $species = Species::all();
        return view('species.index', compact('species'));
    }

    public function create()
    {
        return view('species.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'species_name' => 'required',
        ]);

        $species = new Species([
            'species_name' => $request->get('species_name'),
        ]);

        $species->save();
        return redirect('/species')->with('success', 'Species has been added');
    }

    public function show($id)
    {
        $species = Species::findOrFail($id);
        return view('species.show', compact('species'));
    }

    public function edit($id)
    {
        $species = Species::findOrFail($id);
        return view('species.edit', compact('species'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'species_name' => 'required',
        ]);

        $species = Species::findOrFail($id);
        $species->species_name = $request->get('species_name');
        $species->save();
        return redirect('/species')->with('success', 'Species has been updated');
    }

    public function destroy($id)
    {
        $species = Species::findOrFail($id);
        if ($species->pets()->count() > 0) {
            return redirect('/species')->with('error', 'Cannot delete: This species is associated with one or more pets.');
        }
        $species->delete();
        return redirect('/species')->with('success', 'Species has been deleted successfully');
    }
}
