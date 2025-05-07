<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function selectPatient()
    {
        $patients = auth()->user()->patients;

        return view('medical-records.select', compact('patients'));
    }

    public function show(Patient $patient)
    {
        abort_if($patient->user_id !== auth()->id(), 403);

        $records = $patient->medicalRecords;
        $prescriptions = $patient->prescriptions;

        return view('medical-records.show', compact('patient', 'records', 'prescriptions'));
    }
}
