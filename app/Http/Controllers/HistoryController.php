<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetInfo;
use App\Models\ReasonOfVisit;
use App\Models\History;

class HistoryController extends Controller
{
    public function index()
    {
        $histories = History::all();
        return view('histories.index', compact('histories'));
    }

    public function create(PetInfo $pet)
    {
        $reasonsOfVisit = ReasonOfVisit::all();
        return view('history.create', compact('pet', 'reasonsOfVisit'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'pet_id' => 'required',
            'weight_kg' => 'required',
            'date_visited' => 'required',
        ]);

        // Create a new reason for visit
        $reason = new ReasonOfVisit([
            'reason' => $request->input('reason_of_visit'),
        ]);

        // Save the new reason for visit
        $reason->save();

        // Create a new history with the assigned reason for visit ID
        $history = new History([
            'pet_id' => $request->input('pet_id'),
            'reason_of_visit_id' => $reason->reason_of_visit_id,
            'weight_kg' => $request->input('weight_kg'),
            'date_visited' => $request->input('date_visited'),
        ]);

        // Save the new history
        $history->save();

        return redirect()->route('pets.index')->with('success', 'History has been added successfully');
    }



    public function show($id)
    {
        $history = History::findOrFail($id);
        return view('histories.show', compact('history'));
    }

    public function edit($id)
    {
        $history = History::findOrFail($id);
        $pets = PetInfo::all();
        $reasons = ReasonOfVisit::all();
        return view('histories.edit', compact('history', 'pets', 'reasons'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pet_id' => 'required',
            'weight_kg' => 'required',
            'reason_of_visit_id' => 'required',
            'date_visited' => 'required',
        ]);

        $history = History::findOrFail($id);
        $history->pet_id = $request->get('pet_id');
        $history->weight_kg = $request->get('weight_kg');
        $history->reason_of_visit_id = $request->get('reason_of_visit_id');
        $history->date_visited = $request->get('date_visited');

        $history->save();
        return redirect('/histories')->with('success', 'History has been updated');
    }

    public function destroy($id)
    {
        $history = History::findOrFail($id);
        $history->delete();
        return redirect('/histories')->with('success', 'History has been deleted successfully');
    }
}
