<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Services</title>
</head>
<body class="min-h-screen bg-white px-4 py-6">
    <h2 class="text-lg font-semibold text-gray-700 mb-4">Services</h2>
    
    <div class="grid grid-cols-2 gap-4">
        <!-- Medical Records Card -->
        <a href="{{ route('medical.records') }}"
           class="bg-[#475569] text-white rounded-lg p-4 flex flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m0-4a4 4 0 100-8 4 4 0 000 8zM16 8a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <p>Medical Records</p>
        </a>

        <!-- Prescribe Medicine Card -->
        <a href="{{ route('prescribe.medicine') }}"
           class="bg-[#1e293b] text-white rounded-lg p-4 flex flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M12 4v4m0 0v4m0-4h4m-4 0H8m4 8a4 4 0 100-8 4 4 0 000 8z" />
            </svg>
            <p>Prescribe Medicine</p>
        </a>
    </div>
</body>
</html>