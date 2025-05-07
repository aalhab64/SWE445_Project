<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prescription;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prescription>
 */
class PrescriptionFactory extends Factory
{
    protected $model = Prescription::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'medication_name' => $this->faker->randomElement(['Medication A', 'Medication B', 'Medication C']),
            'dosage' => $this->faker->randomElement(['250mg', '1 tablet', '5ml']),
            'frequency' => $this->faker->randomElement(['Once a day', 'Twice a day', 'Every 8 hours','Every 12 hours']),
            'notes' => $this->faker->sentence(),
            'patient_id' => 1, //No worries about this, since it will be overridden in seeder
        ];
    }
}
