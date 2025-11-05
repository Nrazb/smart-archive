<aside class="w-[200px] min-w-[200px] max-w-[200px] bg-blue-400 text-white flex flex-col">
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
        <a href="{{ route('dashboard') }}" class="block font-semibold text-white hover:text-black transition @if(request()->routeIs('dashboard')) text-black @endif">
            Dashboard
        </a>
        <a href="{{ route('surat-masuk') }}" class="block text-white hover:text-black transition @if(request()->routeIs('surat-masuk')) text-black @endif">
            Surat Masuk
        </a>
        <a href="{{ route('surat-keluar') }}" class="block text-white hover:text-black transition @if(request()->routeIs('surat-keluar')) text-black @endif">
            Surat Keluar
        </a>
    </nav>
</aside>
