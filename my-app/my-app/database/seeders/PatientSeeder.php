<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\User;

class PatientSeeder extends Seeder
{
    public static function seedFor($doctor)
    {
        \App\Models\Patient::factory()->count(3)->create([ 
            'user_id' => $doctor->id,
        ]);
    }

    public function run(): void
    {
        // optional: leave empty if you're calling it manually like above
    }
}
