<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-cream min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-sm border border-navy/10 p-8">

            <div class="flex flex-col items-center mb-8">
                <div class="w-16 h-16 rounded-xl overflow-hidden mb-4">
                    <img src="{{ asset('images/bts.png') }}" alt="Logo Perusahaan" class="w-full h-full object-contain">
                </div>
                <h1 class="font-serif text-2xl text-navy">Daftar Akun</h1>
                <p class="text-navy/50 text-sm mt-1">Buat akun untuk mulai absensi</p>
            </div>

            @if ($errors->any())
                <div class="mb-6 rounded-lg bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="/register" class="space-y-5">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-navy mb-1.5">
                        Nama Lengkap
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus
                        class="w-full rounded-lg border border-navy/15 px-4 py-2.5 text-navy
                               focus:outline-none focus:ring-2 focus:ring-gold focus:border-gold
                               transition"
                        placeholder="Nama kamu">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-navy mb-1.5">
                        Email
                    </label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                        class="w-full rounded-lg border border-navy/15 px-4 py-2.5 text-navy
                               focus:outline-none focus:ring-2 focus:ring-gold focus:border-gold
                               transition"
                        placeholder="nama@email.com">
                </div>

                <div>
                    <label for="no_hp" class="block text-sm font-medium text-navy mb-1.5">
                        No. HP
                    </label>
                    <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp') }}" required
                        class="w-full rounded-lg border border-navy/15 px-4 py-2.5 text-navy
                               focus:outline-none focus:ring-2 focus:ring-gold focus:border-gold
                               transition"
                        placeholder="08xxxxxxxxxx">
                </div>

                <div>
                    <label for="alamat" class="block text-sm font-medium text-navy mb-1.5">
                        Alamat
                    </label>
                    <textarea name="alamat" id="alamat" required rows="2"
                        class="w-full rounded-lg border border-navy/15 px-4 py-2.5 text-navy
                               focus:outline-none focus:ring-2 focus:ring-gold focus:border-gold
                               transition resize-none"
                        placeholder="Alamat tempat tinggal">{{ old('alamat') }}</textarea>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-navy mb-1.5">
                        Kata Sandi
                    </label>
                    <input type="password" name="password" id="password" required
                        class="w-full rounded-lg border border-navy/15 px-4 py-2.5 text-navy
                               focus:outline-none focus:ring-2 focus:ring-gold focus:border-gold
                               transition"
                        placeholder="••••••••">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-navy mb-1.5">
                        Konfirmasi Kata Sandi
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="w-full rounded-lg border border-navy/15 px-4 py-2.5 text-navy
                               focus:outline-none focus:ring-2 focus:ring-gold focus:border-gold
                               transition"
                        placeholder="••••••••">
                </div>

                <button type="submit"
                    class="w-full bg-navy text-cream py-2.5 rounded-lg font-medium
                           hover:bg-navy/90 active:scale-[0.99] transition">
                    Daftar
                </button>
            </form>

            <p class="mt-6 pt-6 border-t border-navy/10 text-center text-sm text-navy/60">
                Sudah punya akun?
                <a href="/" class="text-navy font-medium hover:underline">
                    Masuk di sini
                </a>
            </p>
        </div>
    </div>

</body>
</html>