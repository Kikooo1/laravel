<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetInfo;
use App\Models\Species;

class PetInfoController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $pets = PetInfo::with('species', 'histories', 'vaccinesAdministered')->get();
        return view('pets.index', compact('pets'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $species = Species::all();
        return view('pets.create', compact('species'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'pet_name' => 'required',
            'owner_name' => 'required',
            'img' => 'required',
            'specie_id' => 'required',
        ]);

        $pet = new PetInfo([
            'pet_name' => $request->input('pet_name'),
            'owner_name' => $request->input('owner_name'),
            'img' => $request->input('img'),
            'specie_id' => $request->input('specie_id'),
        ]);

        // Save the new pet information
        $pet->save();

        return redirect()->route('pets.index')->with('success', 'Pet Info has been added successfully');
    }


    // Display the specified resource.
    public function show(PetInfo $pet)
    {
        $historiesWithReasons = $pet->histories->map(function ($history) {
            $history->reasonOfVisit = $history->reasonOfVisit->reason;
            return $history;
        })->toArray();
        return view('pets.show', compact('pet', 'historiesWithReasons'));
    }

    // Show the form for editing the specified resource.
    public function edit(PetInfo $pet)
    {
        $species = Species::all();
        return view('pets.edit', compact('pet', 'species'));
    }

    public function update(Request $request, PetInfo $pet)
    {
        $request->validate([
            'pet_name' => 'required',
            'owner_name' => 'required',
            // Add any other validation rules for the fields you have
        ]);

        $pet->pet_name = $request->input('pet_name');
        $pet->owner_name = $request->input('owner_name');
        // Update other fields as needed

        // Save the updated pet information
        $pet->save();

        return redirect()->route('pets.index')->with('success', 'Pet Info has been updated successfully');
    }

    public function destroy(PetInfo $pet)
    {
        // Delete all associated histories and vaccines administered.
        $pet->histories()->delete();
        $pet->vaccinesAdministered()->delete();

        // Delete all associated reasons of visit.
        foreach ($pet->histories as $history) {
            $history->reason()->delete();
        }

        // Now delete the pet itself.
        $pet->delete();

        return redirect()->route('pets.index')->with('success', 'Pet Info has been deleted successfully');
    }
}
