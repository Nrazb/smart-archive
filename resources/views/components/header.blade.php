<header class="flex justify-between items-center bg-white shadow-md px-6 py-3 mb-6">
    <h1 class="text-lg font-bold text-gray-700">SMART ARCHIVE - Sistem Pengarsipan Surat</h1>
    <div class="flex items-center space-x-3">
        <span class="text-gray-600 font-medium">{{ auth()->user()->name ?? 'User' }}</span>
        <div class="bg-blue-400 rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.485 0 4.79.607 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </div>
    </div>
</header>
