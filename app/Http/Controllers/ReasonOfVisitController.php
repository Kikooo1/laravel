<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReasonOfVisitController extends Controller
{
    public function index()
    {
        $reasons = ReasonOfVisit::all();
        return view('reasons.index', compact('reasons'));
    }

    public function create()
    {
        return view('reasons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'reason' => 'required',
        ]);

        $reason = new ReasonOfVisit([
            'reason' => $request->get('reason'),
        ]);

        $reason->save();
        return redirect('/reasons')->with('success', 'Reason has been added');
    }

    public function show($id)
    {
        $reason = ReasonOfVisit::findOrFail($id);
        return view('reasons.show', compact('reason'));
    }

    public function edit($id)
    {
        $reason = ReasonOfVisit::findOrFail($id);
        return view('reasons.edit', compact('reason'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'reason' => 'required',
        ]);

        $reason = ReasonOfVisit::findOrFail($id);
        $reason->reason = $request->get('reason');

        $reason->save();
        return redirect('/reasons')->with('success', 'Reason has been updated');
    }

    public function destroy($id)
    {
        $reason = ReasonOfVisit::findOrFail($id);
        $reason->delete();
        return redirect('/reasons')->with('success', 'Reason has been deleted successfully');
    }
}
