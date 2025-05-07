<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Prescribe Medicine') }}
        </h2>
    </x-slot>

<div x-data="{ showModal: false }" class="min-h-screen bg-white px-4 py-6 relative">
    
    <div class="flex items-center justify-between mb-6">
        <a href="#" class="text-gray-600 text-xl">←</a>
        <h2 class="text-lg font-semibold text-gray-800 text-center flex-1">Prescribe Medicine</h2>
        <span class="w-5"></span>
    </div>


    <div class="mb-4">
        <label class="block font-semibold text-gray-700 mb-1">Medicine</label>
        <div class="flex items-center bg-gray-100 rounded-md px-3 py-2">
            <img src="{{ asset('images/medicine-icon.png') }}" class="w-5 h-5 mr-2" alt="icon">
            <span>Panadol</span>
        </div>
    </div>


    <div class="mb-4">
        <label class="block font-semibold text-gray-700 mb-1">Dosage</label>
        <div class="flex items-center bg-gray-100 rounded-md px-3 py-2">
            <img src="{{ asset('images/dosage-icon.png') }}" class="w-5 h-5 mr-2" alt="icon">
            <span>2 pills</span>
        </div>
    </div>

 
    <div class="mb-4">
        <label class="block font-semibold text-gray-700 mb-1">Frequency of Dosage</label>
        <div class="flex items-center bg-gray-100 rounded-md px-3 py-2">
            <img src="{{ asset('images/frequency-icon.png') }}" class="w-5 h-5 mr-2" alt="icon">
            <span>Every 4 hours</span>
        </div>
    </div>


    <div class="mb-6">
        <label class="block font-semibold text-gray-700 mb-1">Additional Notes</label>
        <textarea rows="4" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-300 text-gray-800"></textarea>
    </div>


    <div class="space-y-3">
        
        <button @click="showModal = true" class="w-full py-3 rounded-full bg-[#1e293b] text-white font-semibold">Confirm</button>
    </div>


    <div x-show="showModal" x-transition class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
        <div class="bg-white w-[90%] max-w-sm rounded-2xl p-6 shadow-lg text-center">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Confirm Medicine</h3>
            <p class="text-sm text-gray-600 mb-4">Panadol, 2 pills, Every 4 hours</p>
            <div class="flex justify-between gap-4">
                <button @click="showModal = false" class="w-full py-2 bg-gray-100 rounded-full text-gray-700 font-semibold">Cancel</button>
                <button @click="showModal = false" class="w-full py-2 bg-[#1e293b] text-white rounded-full font-semibold">Confirm</button>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
