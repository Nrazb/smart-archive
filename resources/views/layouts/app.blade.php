<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex h-screen overflow-hidden">

        {{-- Sidebar --}}
        <aside class="w-64 bg-blue-400 text-white flex flex-col">
            <div class="flex items-center justify-center h-20 bg-blue-500">
                <div class="bg-blue-600 rounded-full p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>
            <nav class="flex-1 p-4 space-y-3">
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded hover:bg-blue-500 font-medium">Dashboard</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-blue-500 font-medium">Surat Masuk</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-blue-500 font-medium">Surat Keluar</a>
            </nav>
        </aside>

        {{-- Konten utama --}}
        <div class="flex-1 flex flex-col">
            {{-- Navbar --}}
            <header class="bg-white h-20 flex justify-between items-center px-6 shadow-sm border-b">
                <h1 class="text-xl font-semibold text-gray-800"></h1>
                <div class="flex items-center space-x-3">
                    <span class="text-sm text-gray-600">{{ Auth::user()->name }}</span>
                    <div class="bg-blue-200 text-blue-600 rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 15c2.485 0 4.779.676 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                </div>
            </header>

            {{-- Isi konten --}}
            <main class="flex-1 p-8 overflow-y-auto">
                @yield('content')
            </main>
        </div>

    </div>

</body>
</html>
