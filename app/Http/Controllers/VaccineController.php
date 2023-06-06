<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;

class VaccineController extends Controller
{
    public function index()
    {
        $vaccines = Vaccine::all();
        return view('vaccines.index', compact('vaccines'));
    }

    public function create()
    {
        return view('vaccines.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vaccine_name' => 'required',
        ]);

        $vaccine = new Vaccine([
            'vaccine_name' => $request->get('vaccine_name'),
        ]);

        $vaccine->save();
        return redirect('/vaccines')->with('success', 'Vaccine has been added');
    }

    public function show($id)
    {
        $vaccine = Vaccine::findOrFail($id);
        return view('vaccines.show', compact('vaccine'));
    }

    public function edit($id)
    {
        $vaccine = Vaccine::findOrFail($id);
        return view('vaccines.edit', compact('vaccine'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'vaccine_name' => 'required',
        ]);

        $vaccine = Vaccine::findOrFail($id);
        $vaccine->vaccine_name = $request->get('vaccine_name');

        $vaccine->save();
        return redirect('/vaccines')->with('success', 'Vaccine has been updated');
    }

    public function destroy($id)
    {
        $vaccine = Vaccine::findOrFail($id);
        if ($vaccine->vaccinesadministered()->count() > 0) {
            return redirect('/species')->with('error', 'Cannot delete: This vaccine is associated with one or more vaccine administered.');
        }
        $vaccine->delete();
        return redirect('/vaccines')->with('success', 'Vaccine has been deleted successfully');
    }
}
