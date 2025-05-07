<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Select Patient to Prescribe') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-white dark:bg-gray-100 px-4 py-6">
        @if ($patients->isEmpty())
            <p class="text-gray-600">You have no assigned patients.</p>
        @else
            <ul class="space-y-3">
                @foreach ($patients as $patient)
                    <li>
                        <a href="{{ route('prescribe-medicine.create', $patient) }}" class="text-blue-600 hover:underline">
                            {{ $patient->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</x-app-layout>

