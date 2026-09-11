<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses Ditolak</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-cream min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-sm border border-navy/10 p-8 text-center">

            {{-- Icon --}}
            <div class="w-20 h-20 rounded-full bg-red-50 border border-red-100 flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 10-8 0v4h8z" />
                </svg>
            </div>

            <p class="text-gold font-medium text-sm tracking-wide mb-2">ERROR 403</p>
            <h1 class="font-serif text-2xl text-navy mb-3">Akses Ditolak</h1>
            <p class="text-navy/50 text-sm mb-8">
                Kamu tidak punya izin untuk mengakses halaman ini. Kalau ini seharusnya bisa kamu akses, hubungi admin.
            </p>

            <a href="/"
                class="inline-block w-full bg-navy text-cream py-2.5 rounded-lg font-medium
                       hover:bg-navy/90 active:scale-[0.99] transition">
                Kembali ke Beranda
            </a>

            <p class="mt-6 pt-6 border-t border-navy/10 text-sm text-navy/60">
                Login sebagai akun lain?
                <a href="/" class="text-gold font-medium hover:underline">
                    Login di sini
                </a>
            </p>
        </div>
    </div>

</body>
</html>