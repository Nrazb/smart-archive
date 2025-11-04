<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Aplikasi Pengarsipan Surat</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-200 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-2xl shadow-lg flex flex-col md:flex-row overflow-hidden w-[90%] md:w-[800px]">
        <!-- Bagian Kiri -->
        <div class="hidden md:flex md:w-1/2 bg-white items-center justify-center p-6">
            <img src="{{ asset('images/login-illustration.png') }}" alt="Ilustrasi Login" class="w-4/5">
        </div>
        <!-- Bagian Kanan -->
        <div class="w-full md:w-1/2 p-8 flex flex-col justify-center">
            <div class="text-center mb-6">
                <div class="flex justify-center mb-2">
                    <div class="bg-blue-500 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m0 0v10a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-lg font-semibold text-gray-700">Aplikasi Pengarsipan Surat</h2>
            </div>
            {{-- Pesan Error --}}
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-2 rounded mb-4 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- Form Login --}}
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <input type="email" name="email" placeholder="Masukan email anda"
                    value="{{ old('username') }}"
                    class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 outline-none">
                <input type="password" name="password" placeholder="Password"
                    class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400 outline-none">
                <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg py-2 transition duration-200">
                    LOGIN
                </button>
            </form>
            <p class="text-center text-sm text-gray-500 mt-4">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Daftar Sekarang</a>
            </p>
        </div>
    </div>
</body>
</html>
