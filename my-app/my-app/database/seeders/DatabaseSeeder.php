<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Patient;
use App\Models\MedicalRecord;
use App\Models\Prescription;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $doctorA = User::factory()->create([
            'name' => 'Dr. Alice',
            'email' => 'alice@test.com',
            'password' => Hash::make('password123'), 
        ]);

        $doctorB = User::factory()->create([
            'name' => 'Dr. Bob',
            'email' => 'bob@test.com',
            'password' => Hash::make('password123'), 
        ]);

        foreach ([$doctorA, $doctorB] as $doctor) {
            $patients = Patient::factory()->count(3)->create(['user_id' => $doctor->id]);

            foreach ($patients as $patient) {
                MedicalRecord::factory()->count(1)->create(['patient_id' => $patient->id]);
                Prescription::factory()->count(2)->create(['patient_id' => $patient->id]);
            }
        }
    
    }
}
