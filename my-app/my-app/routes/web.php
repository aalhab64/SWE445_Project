<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\MedicalRecordController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () 
{
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/medical-records', [MedicalRecordController::class, 'selectPatient'])->name('medical-records.select');
    Route::get('/medical-records/{patient}', [MedicalRecordController::class, 'show'])->name('medical-records.show');

    Route::get('/prescribe-medicine', [PrescriptionController::class, 'selectPatient'])->name('prescribe-medicine.select');
    Route::get('/prescribe-medicine/{patient}', [PrescriptionController::class, 'create'])->name('prescribe-medicine.create');
    Route::post('/prescribe-medicine/{patient}', [PrescriptionController::class, 'store'])->name('prescribe-medicine.store');
    Route::get('/prescriptions/{prescription}/edit', [PrescriptionController::class, 'edit'])->name('prescriptions.edit');
    Route::put('/prescriptions/{prescription}', [PrescriptionController::class, 'update'])->name('prescriptions.update');
    Route::delete('/prescriptions/{prescription}', [PrescriptionController::class, 'destroy'])->name('prescriptions.destroy');

    Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
    Route::get('/patients/{patient}/records', [PatientController::class, 'show'])->name('patients.records');
});



require __DIR__.'/auth.php';
