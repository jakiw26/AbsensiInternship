<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Internship</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-cream min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-sm border border-navy/10 p-8">
            <div class="flex flex-col items-center mb-8">
                <div class="w-16 h-16 rounded-xl overflow-hidden mb-4">
                    <img src="{{ asset('images/bts.png') }}" alt="Logo Perusahaan" class="w-full h-full object-contain">
                </div>
                <h1 class="font-serif text-2xl text-navy">Absensi Internship</h1>
            </div>

            @if ($errors->any())
                <div class="mb-6 rounded-lg bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">
                    {{ $errors->first() }}
                </div>
            @endif

            @if (session('success'))
                <div id="success-alert"
                    class="fixed top-6 right-6 z-50 w-[380px] max-w-[calc(100%-2rem)]
               rounded-2xl border border-emerald-100 bg-white
               p-4 shadow-2xl shadow-emerald-100/50
               transition-all duration-500 ease-in-out">
                    <div class="flex items-start gap-4">

                        {{-- Icon --}}
                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center
                       rounded-full bg-emerald-100">
                            <svg class="h-6 w-6 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>

                        {{-- Text --}}
                        <div class="flex-1">
                            <h3 class="text-sm font-bold text-gray-900">
                                Berhasil!
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                {{ session('success') }}
                            </p>
                        </div>

                        {{-- Close --}}
                        <button type="button" onclick="closeAlert()"
                            class="text-gray-400 transition hover:text-gray-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    {{-- Progress Bar --}}
                    <div class="mt-4 h-1 overflow-hidden rounded-full bg-gray-100">
                        <div id="progress-bar" class="h-full rounded-full bg-emerald-500"
                            style="width: 100%; transition: width 4s linear;"></div>
                    </div>
                </div>

                <script>
                    const alertBox = document.getElementById('success-alert');
                    const progressBar = document.getElementById('progress-bar');

                    function closeAlert() {
                        alertBox.classList.add(
                            'translate-x-[120%]',
                            'opacity-0'
                        );

                        setTimeout(() => {
                            alertBox.remove();
                        }, 500);
                    }

                    setTimeout(() => {
                        progressBar.style.width = '0%';
                    }, 100);

                    setTimeout(() => {
                        closeAlert();
                    }, 4000);
                </script>
            @endif

            <form method="POST" action="/login" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-navy mb-1.5">
                        Email
                    </label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                        class="w-full rounded-lg border border-navy/15 px-4 py-2.5 text-navy
                               focus:outline-none focus:ring-2 focus:ring-gold focus:border-gold
                               transition"
                        placeholder="nama@email.com">
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="password" class="block text-sm font-medium text-navy">
                            Kata Sandi
                        </label>
                        <a href="/password-request" class="text-sm text-gold hover:underline">
                            Lupa kata sandi?
                        </a>
                    </div>
                    <input type="password" name="password" id="password" required
                        class="w-full rounded-lg border border-navy/15 px-4 py-2.5 text-navy
                               focus:outline-none focus:ring-2 focus:ring-gold focus:border-gold
                               transition"
                        placeholder="••••••••">
                </div>

                <label class="flex items-center gap-2 text-sm text-navy/70">
                    <input type="checkbox" name="remember" class="rounded border-navy/30 text-gold focus:ring-gold">
                    Ingat saya
                </label>

                <button type="submit"
                    class="w-full bg-navy text-cream py-2.5 rounded-lg font-medium
                           hover:bg-navy/90 active:scale-[0.99] transition">
                    Login
                </button>
            </form>

            <p class="mt-6 pt-6 border-t border-navy/10 text-center text-sm text-navy/60">
                Belum punya akun?
                <a href="/register" class="text-gold font-medium hover:underline">
                    Daftar di sini
                </a>
            </p>
        </div>

    </div>

</body>

</html>
