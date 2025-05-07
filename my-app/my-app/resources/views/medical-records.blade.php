<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Medical Records') }}
        </h2>
    </x-slot>

<div class="min-h-screen bg-white px-4 py-6">
    <h2 class="text-center text-lg font-semibold text-gray-800 mb-6">Medical Records</h2>

    <div class="space-y-4">
        <!-- Diagnosis -->
        <div class="bg-white p-4 rounded-xl shadow-md flex items-center space-x-4">
            <img src="{{ asset('images/stethoscope.png') }}" alt="Diagnosis" class="w-16 h-16 rounded-md object-cover">
            <div>
                <h3 class="font-semibold text-gray-800">Diagnosis</h3>
                <p class="text-sm text-gray-700">Condition A</p>
                <p class="text-xs text-gray-500">Diagnosed on 01/01/2023</p>
            </div>
        </div>

        <!-- Lab Results -->
        <div class="bg-white p-4 rounded-xl shadow-md flex items-center space-x-4">
            <img src="{{ asset('images/lab-results.png') }}" alt="Lab Results" class="w-16 h-16 rounded-md object-cover">
            <div>
                <h3 class="font-semibold text-blue-800">Lab Results</h3>
                <p class="text-sm text-gray-700">Blood Test</p>
                <p class="text-xs text-gray-500">Normal</p>
            </div>
        </div>

        <!-- Treatments -->
        <div class="bg-white p-4 rounded-xl shadow-md flex items-center space-x-4">
            <img src="{{ asset('images/treatment.png') }}" alt="Treatments" class="w-16 h-16 rounded-md object-cover">
            <div>
                <h3 class="font-semibold text-blue-800">Treatments</h3>
                <p class="text-sm text-gray-700">Therapy A</p>
                <p class="text-xs text-gray-500">Completed</p>
            </div>
        </div>

        <!-- Prescriptions -->
        <div class="bg-white p-4 rounded-xl shadow-md flex items-center space-x-4">
            <img src="{{ asset('images/prescription.png') }}" alt="Prescriptions" class="w-16 h-16 rounded-md object-cover">
            <div>
                <h3 class="font-semibold text-gray-800">Prescriptions</h3>
                <p class="text-sm text-gray-700">Medication A</p>
                <p class="text-xs text-gray-500">Twice a day</p>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
