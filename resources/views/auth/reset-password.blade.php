<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Kata Sandi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-cream min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-sm border border-navy/10 p-8">

            <div class="flex flex-col items-center mb-8">
                <div class="w-16 h-16 rounded-xl overflow-hidden mb-4">
                    <img src="{{ asset('images/bts.png') }}" alt="Logo Perusahaan" class="w-full h-full object-contain">
                </div>
                <h1 class="font-serif text-2xl text-navy">Reset Kata Sandi</h1>
                <p class="text-navy/50 text-sm mt-1 text-center">
                    Masukkan password baru untuk akun kamu.
                </p>
            </div>

            @if ($errors->any())
                <div class="mb-6 rounded-lg bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.update') }}" class="space-y-5">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}">

                <div>
                    <label for="password" class="block text-sm font-medium text-navy mb-1.5">Password Baru</label>
                    <input type="password" name="password" id="password" required
                        class="w-full rounded-lg border border-navy/15 px-4 py-2.5 text-navy focus:outline-none focus:ring-2 focus:ring-gold focus:border-goldtransition">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-navy mb-1.5">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="w-full rounded-lg border border-navy/15 px-4 py-2.5 text-navy
                               focus:outline-none focus:ring-2 focus:ring-gold focus:border-gold
                               transition">
                </div>

                <button type="submit"
                    class="w-full bg-navy text-cream py-2.5 rounded-lg font-medium
                           hover:bg-navy/90 active:scale-[0.99] transition">
                    Reset Password
                </button>
            </form>

            <p class="mt-6 pt-6 border-t border-navy/10 text-center text-sm text-navy/60">
                <a href="/" class="text-navy font-medium hover:underline">
                    Kembali ke login
                </a>
            </p>
        </div>
    </div>
</body>
</html>