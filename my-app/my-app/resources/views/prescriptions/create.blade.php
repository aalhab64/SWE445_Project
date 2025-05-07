<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl fon-semibold text-gray-800 dark:text-gray-200 leading-tight">
            {{ isset($prescription) ? 'Edit Prescription' : 'Prescribe Medicine for ' . $patient->name }}
        </h2>
    </x-slot>

    <div x-data="{ showModal: false }" class="min-h-screen bg-white px-4 py-6 relative">

        <form method="POST" 
              action="{{ isset($prescription) 
                  ? route('prescriptions.update', $prescription->id) 
                  : route('prescribe-medicine.store', $patient) }}">

            @csrf
            @if(isset($prescription))
                @method('PUT')
            @endif

            <div class="mb-4">
                <label class="block font-semibold text-gray-700 mb-1">Medicine</label>
                <input type="text" name="medication_name" 
                       value="{{ old('medication_name', $prescription->medication_name ?? '') }}" 
                       class="w-full border px-3 py-2 rounded-md" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-700 mb-1">Dosage</label>
                <input type="text" name="dosage" 
                       value="{{ old('dosage', $prescription->dosage ?? '') }}" 
                       class="w-full border px-3 py-2 rounded-md" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-700 mb-1">Frequency of Dosage</label>
                <input type="text" name="frequency" 
                       value="{{ old('frequency', $prescription->frequency ?? '') }}" 
                       class="w-full border px-3 py-2 rounded-md" required>
            </div>

            <div class="mb-6">
                <label class="block font-semibold text-gray-700 mb-1">Additional Notes</label>
                <textarea name="notes" rows="4" 
                          class="w-full border px-3 py-2 rounded-md">{{ old('notes', $prescription->notes ?? '') }}</textarea>
            </div>

            <!-- Hidden patient_id for update requests if needed -->
            <input type="hidden" name="patient_id" 
                   value="{{ $patient->id ?? $prescription->patient_id ?? '' }}">

            <button @click="showModal = true" type="submit"
                class="w-full py-3 rounded-full bg-[#1e293b] text-black font-semibold">
                {{ isset($prescription) ? 'Update Prescription' : 'Confirm' }}
            </button>
        </form>

    </div>
</x-app-layout>
