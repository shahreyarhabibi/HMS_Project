<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientRecord;

class PatientRegisterController extends Controller
{
    public function create()
    {
        return view('registry.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NAME' => 'required|string|max:255',
            'FATHERNAME' => 'required|string|max:255',
            'LASTNAME' => 'nullable|string|max:255',
            'AGE' => 'required|integer',
            'MAINRESIDENCE' => 'nullable|string|max:255',
            'CURRENTRESIDENCE' => 'nullable|string|max:255',
            'DISEASE' => 'required|string|max:255',
            'SEX' => 'required|string|max:255',
            'PHONENUMBER' => 'required|string|max:255',
            'ADDRESS' => 'required|string|max:255',
            'DOCTORNAME' => 'nullable|string|max:255',
            'ATTENDDATE' => 'required|date',
            'LASTATTEND' => 'nullable|date',
            'COMPLAINS' => 'nullable|string',
            'DIAGNOSIS' => 'nullable|string',
            'PRESCRIPTION' => 'nullable|string',
        ]);

        PatientRecord::create($validatedData);

        return redirect()->route('registry.index')->with('message', 'Record created successfully')->with('msg_type', 'success');
    }

    public function edit($id)
    {
        $record = PatientRecord::findOrFail($id);
        return view('patients.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'NAME' => 'required|string|max:255',
            'FATHERNAME' => 'required|string|max:255',
            'LASTNAME' => 'nullable|string|max:255',
            'AGE' => 'required|integer',
            'MAINRESIDENCE' => 'nullable|string|max:255',
            'CURRENTRESIDENCE' => 'nullable|string|max:255',
            'DISEASE' => 'required|string|max:255',
            'SEX' => 'required|string|max:255',
            'PHONENUMBER' => 'required|string|max:255',
            'ADDRESS' => 'required|string|max:255',
            'DOCTORNAME' => 'nullable|string|max:255',
            'ATTENDDATE' => 'required|date',
            'LASTATTEND' => 'nullable|date',
            'COMPLAINS' => 'nullable|string',
            'DIAGNOSIS' => 'nullable|string',
            'PRESCRIPTION' => 'nullable|string',
        ]);

        $record = PatientRecord::findOrFail($id);
        $record->update($request->all());

        return redirect()->route('registry.index')->with('message', 'Record updated successfully')->with('msg_type', 'success');
    }

}
