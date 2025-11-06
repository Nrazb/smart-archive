<aside class="w-[200px] min-w-[200px] max-w-[200px] bg-blue-400 text-white flex flex-col">
    <!-- Logo / Icon -->
    <div class="flex items-center justify-center mt-6 mb-8">
        <div class="bg-blue-700 p-3 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-8 w-8 text-white"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 space-y-3 px-6">
        <!-- Dashboard -->
        <a href="/dashboard"
           class="block font-semibold px-3 py-2 rounded-lg transition
           {{ Request::is('dashboard') ? 'text-black' : 'text-white hover:bg-blue-600' }}">
            Dashboard
        </a>

        <a href="{{route('letters.create')}}"
           class="block font-semibold px-3 py-2 rounded-lg transition
           {{ Request::is('letters/create') ? 'text-black' : 'text-white hover:bg-blue-600' }}">
            Input Arsip Surat
        </a>

        <!-- Arsip Surat -->
        <a href="{{route('letters.index')}}"
           class="block font-semibold px-3 py-2 rounded-lg transition
           {{ Request::is('letters') ? 'text-black' : 'text-white hover:bg-blue-600' }}">
            Arsip Surat
        </a>

        <!-- Logout -->
        <a href="{{ route('logout') }}"
           class="block font-semibold px-3 py-2 rounded-lg transition text-white hover:bg-red-600">
            Logout
        </a>
    </nav>
</aside>
