<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VaccinesAdministered;
use App\Models\PetInfo;
use App\Models\Vaccine;

class VaccinesAdministeredController extends Controller
{
    public function index()
    {
        $vaccinesAdministered = VaccinesAdministered::all();
        return view('vaccinesAdministered.index', compact('vaccinesAdministered'));
    }

    public function create(PetInfo $pet)
    {
        $vaccines = Vaccine::all();
        return view('vaccines_administered.create', compact('pet', 'vaccines'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pet_id' => 'required',
            'vaccine_id' => 'required',
        ]);

        $vaccinesAdministered = new VaccinesAdministered([
            'pet_id' => $request->input('pet_id'),
            'vaccine_id' => $request->input('vaccine_id'),
        ]);

        // Save the new vaccines administered information
        $vaccinesAdministered->save();

        return redirect()->route('pets.index')->with('success', 'Vaccine has been added successfully');
    }


    public function show($id)
    {
        $vaccinesAdministered = VaccinesAdministered::findOrFail($id);
        return view('vaccinesAdministered.show', compact('vaccinesAdministered'));
    }

    public function edit($id)
    {
        $vaccinesAdministered = VaccinesAdministered::findOrFail($id);
        $pets = PetInfo::all();
        $vaccines = Vaccine::all();
        return view('vaccinesAdministered.edit', compact('vaccinesAdministered', 'pets', 'vaccines'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pet_id' => 'required',
            'vaccine_id' => 'required',
        ]);

        $vaccinesAdministered = VaccinesAdministered::findOrFail($id);
        $vaccinesAdministered->pet_id = $request->get('pet_id');
        $vaccinesAdministered->vaccine_id = $request->get('vaccine_id');

        $vaccinesAdministered->save();
        return redirect('/vaccinesAdministered')->with('success', 'Vaccine Administered has been updated');
    }

    public function destroy($id)
    {
        $vaccinesAdministered = VaccinesAdministered::findOrFail($id);
        $vaccinesAdministered->delete();
        return redirect('/vaccinesAdministered')->with('success', 'Vaccine Administered has been deleted successfully');
    }
}
