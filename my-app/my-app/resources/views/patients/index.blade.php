<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Patients') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4">
        @if($patients->isEmpty())
            <p class="text-gray-600">You have no patients assigned.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($patients as $patient)
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $patient->name }}</h3>

                        <div class="mt-3 space-x-2">
                            <a href="{{ route('patients.records', $patient) }}"
                               class="text-sm text-blue-600 underline">View Records</a>
                            <a href="{{ route('prescriptions.create', $patient) }}"
                               class="text-sm text-green-600 underline">Prescribe Medicine</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
