<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            Medical Records for {{ $patient->name }}
        </h2>
    </x-slot>

    <div class="py-6 px-4">
        @if($records->isEmpty())
            <p class="text-gray-600">No medical records found for this patient.</p>
        @else
            <div class="space-y-4">
                @foreach ($records as $record)
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="font-semibold text-gray-800">Diagnosis:</h3>
                        <p class="text-gray-700">{{ $record->diagnosis }}</p>

                        @if($record->lab_results)
                            <p class="text-sm text-gray-600 mt-2"><strong>Lab Results:</strong> {{ $record->lab_results }}</p>
                        @endif

                        @if($record->treatments)
                            <p class="text-sm text-gray-600"><strong>Treatments:</strong> {{ $record->treatments }}</p>
                        @endif

                        <p class="text-xs text-gray-500 mt-2">Created on {{ $record->created_at->format('M d, Y') }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
