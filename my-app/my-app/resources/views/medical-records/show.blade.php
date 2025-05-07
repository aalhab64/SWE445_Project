<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            Medical Records for {{ $patient->name }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-white px-4 py-6">
        <!-- MEDICAL RECORDS -->
        <h3 class="text-center text-lg font-semibold text-gray-800 mb-6">Medical Records</h3>

        @forelse ($records as $record)
            <div class="bg-white p-4 rounded-xl shadow-md space-y-3 mb-6">
                <!-- Diagnosis -->
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/stethoscope-icon.png') }}" class="w-16 h-16 rounded-md object-cover">
                    <div>
                        <p class="font-semibold text-blue-800">Diagnosis</p>
                        <p class="text-sm text-gray-700">{{ $record->diagnosis }}</p>
                        <p class="text-xs text-gray-500">Diagnosed on {{ $record->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>

                @if($record->lab_results)
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/lab-icon.png') }}"  
class="w-16 h-16 rounded-md object-cover">
                    <div>
                        <p class="font-semibold text-blue-800">Lab Results</p>
                        <p class="text-sm text-gray-700">{{ $record->lab_results }}</p>
                    </div>
                </div>
                @endif

                @if($record->treatments)
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/treatment-icon.png') }}" class="w-16 h-16 rounded-md object-cover">
                    <div>
                        <p class="font-semibold text-blue-800">Treatments</p>
                        <p class="text-sm text-gray-700">{{ $record->treatments }}</p>
                    </div>
                </div>
                @endif
            </div>
        @empty
            <p class="text-gray-600 text-center">This patient has no records yet.</p>
        @endforelse

        <!-- PRESCRIPTIONS -->
        <div class="mt-10">
            <h3 class="text-center text-lg font-semibold text-gray-800 mb-6">Prescriptions</h3>

            @forelse ($prescriptions as $prescription)
                <div class="bg-white p-4 rounded-xl shadow-md flex items-center space-x-4 mb-4">
                    <img src="{{ asset('images/prescription.png') }}" alt="Prescription" class="w-16 h-16 rounded-md object-cover">
                    <div>
                        <h3 class="font-semibold text-gray-800">{{ $prescription->medication_name }}</h3>
                        <p class="text-sm text-gray-700">{{ $prescription->dosage }} – {{ $prescription->frequency }}</p>
                        @if ($prescription->notes)
                            <p class="text-xs text-gray-500 mt-1">Notes: {{ $prescription->notes }}</p>
                        @endif
                        <p class="text-xs text-gray-400 mt-1">Prescribed on {{ $prescription->created_at->format('M d, Y') }}</p>
                    </div>
                    <!-- Action buttons -->
                    <div class="flex space-x-2">
                        <!-- Edit -->
                        <a href="{{ route('prescriptions.edit', $prescription->id) }}"
                           class="text-blue-600 hover:underline text-sm">✏️ Edit</a>

                        <!-- Delete -->
                        <form action="{{ route('prescriptions.destroy', $prescription->id) }}" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this prescription?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline text-sm">🗑️ Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="text-gray-600 text-center">No prescriptions found for this patient.</p>
            @endforelse
        </div>
    </div>
</x-app-layout>

