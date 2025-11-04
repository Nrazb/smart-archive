<aside class="w-64 bg-blue-400 text-white flex flex-col rounded-r-3xl">
    <div class="flex items-center justify-center mt-6 mb-8">
        <div class="bg-blue-600 p-3 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </div>
    </div>

    <nav class="flex-1 space-y-4 px-6">
        <a href="{{ route('dashboard') }}" class="block font-semibold text-black">Dashboard</a>
        <a href="#" class="block text-white hover:text-black transition">Surat Masuk</a>
        <a href="#" class="block text-white hover:text-black transition">Surat Keluar</a>
    </nav>
</aside>
