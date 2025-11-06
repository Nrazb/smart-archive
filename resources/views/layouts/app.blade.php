<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="bootstrap/css/">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans opacity-0">
    <div class="flex min-h-screen overflow-x-hidden overflow-y-auto">
        {{-- SIDEBAR --}}
        @include('components.sidebar')

        {{-- Konten utama --}}
        <div class="flex-1 flex flex-col">
            <header>@include('components.header')</header>
            <main class="flex-1 p-4 overflow-y-auto">
                @yield('content')
            </main>
        </div>

    </div>
    <script>
    window.addEventListener("DOMContentLoaded", () => {
        document.body.classList.add("opacity-100");
    });

    document.querySelectorAll('a[href]').forEach(link => {
        const href = link.getAttribute('href');
        if (href && !href.startsWith('#') && !href.startsWith('javascript')) {
        link.addEventListener('click', e => {
            if (link.target !== "_blank" && !e.ctrlKey && !e.metaKey) {
            e.preventDefault();
            document.body.classList.add('opacity-0');
            setTimeout(() => {
                window.location.href = href;
            }, 200);
            }
        });
        }
    });
    </script>
</body>
</html>
