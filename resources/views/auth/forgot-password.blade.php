<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Kata Sandi </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-cream min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-sm border border-navy/10 p-8">

            <div class="flex flex-col items-center mb-8">
                <div class="w-16 h-16 rounded-xl overflow-hidden mb-4">
                    <img src="{{ asset('images/bts.png') }}" alt="Logo Perusahaan" class="w-full h-full object-contain">
                </div>
                <h1 class="font-serif text-2xl text-navy">Lupa Kata Sandi</h1>
                <p class="text-navy/50 text-sm mt-1 text-center">
                    Masukkan email kamu, kami akan kirim link untuk reset password.
                </p>
            </div>

            {{-- Pesan sukses setelah link dikirim --}}
            @if (session('status'))
                <div class="mb-6 rounded-lg bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-700">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-6 rounded-lg bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="/password-request" class="space-y-5">
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

                <button type="submit"
                    class="w-full bg-navy text-cream py-2.5 rounded-lg font-medium
                           hover:bg-navy/90 active:scale-[0.99] transition">
                    Kirim Link Reset
                </button>
            </form>

            <p class="mt-6 pt-6 border-t border-navy/10 text-center text-sm text-navy/60 flex flex-col gap-1">
                <span>Ingat kata sandi kamu?</span>
                <a href="/" class="text-navy font-medium hover:underline">
                    Kembali ke login
                </a>
            </p>
        </div>
    </div>

</body>

</html>
