<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function selectPatient()
    {
        $patients = auth()->user()->patients;
        return view('prescriptions.select', compact('patients'));
    }

    public function create(Patient $patient)
    {
        abort_if($patient->user_id !== auth()->id(), 403);
        return view('prescriptions.create', compact('patient'));
    }

    public function store(Request $request, Patient $patient)
    {
        abort_if($patient->user_id !== auth()->id(), 403);

        $validated = $request->validate([
            'medication_name' => 'required|string|max:50',
            'dosage' => 'required|string|max:50',
            'frequency' => 'required|string|max:50',
            'notes' => 'nullable|string|max:255',
        ]);

        $patient->prescriptions()->create($validated);

        return redirect()->route('prescribe-medicine.select')->with('success', 'Prescription saved.');
    }
    
    public function edit(Prescription $prescription)
    {
        abort_if($prescription->patient->user_id !== auth()->id(), 403);

        return view('prescriptions.create', [
            'prescription' => $prescription,
            'patient' => $prescription->patient,
        ]);
    }

    public function update(Request $request, Prescription $prescription)
    {
        abort_if($prescription->patient->user_id !== auth()->id(), 403);

        $validated = $request->validate([
            'medication_name' => 'required|string|max:50',
            'dosage' => 'required|string|max:50',
            'frequency' => 'required|string|max:50',
            'notes' => 'nullable|string|max:250',
        ]);

        $prescription->update($validated);

        return redirect()->route('medical-records.show', $prescription->patient_id)->with('success', 'Prescription updated.');
    }

    public function destroy(Prescription $prescription)
    {
        abort_if($prescription->patient->user_id !== auth()->id(), 403);

        $prescription->delete();

        return redirect()->route('medical-records.show', $prescription->patient_id)->with('success', 'Prescription deleted.');
    }
}


