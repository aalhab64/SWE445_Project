<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Prescription extends Model
{
    use HasFactory;

    protected $fillable =   //This allows mass assignment. Would be blocked otherwise
    [
        'medication_name',
        'dosage',
        'frequency',
        'notes',
        'patient_id', 
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
