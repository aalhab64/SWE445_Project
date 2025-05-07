<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MedicalRecord;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicalRecord>
 */
class MedicalRecordFactory extends Factory
{
    protected $model = MedicalRecord::class;

    public function definition(): array
    {
        return [
            'diagnosis' => $this->faker->randomElement(['Condition A', 'Condition B','Condition C','No Diagnosis']),
            'lab_results' => $this->faker->randomElement(['Normal', 'Abnormal','No Tests Conducted']),
            'treatments' => $this->faker->randomElement(['Therapy A', 'Therapy B','Therapy C','No Treatment Assigned']),
            'patient_id' => 1, //No worries about this, since it will be overridden in seeder
        ];
    }
}
