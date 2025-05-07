<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = auth()->user()->patients;
        return view('patients.index', compact('patients'));
    }

    public function show(Patient $patient)
    {
        abort_if($patient->user_id !== auth()->id(), 403);  //Reject if patient does not belong to the doctor
        
        return view('patients.records', 
        [
            'patient' => $patient,
            'records' => $patient->medicalRecords
        ]);
    }
}
