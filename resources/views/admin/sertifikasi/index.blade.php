<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Sertifikasi</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen bg-slate-50 font-sans text-slate-800">

    <div class="flex min-h-screen">

        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-40 w-64 bg-[#111827] text-white flex flex-col transform -translate-x-full md:translate-x-0 transition-transform duration-200 shadow-2xl">
            <div class="flex items-center gap-3 px-6 py-6 border-b border-white/10">
                <div class="w-10 h-10 rounded-xl overflow-hidden bg-white flex-shrink-0 shadow-sm">
                    <img src="{{ asset('images/bts.png') }}" alt="Logo" class="w-full h-full object-contain">
                </div>
                <div>
                    <p class="font-serif text-lg leading-tight text-white">
                        Absensi
                    </p>

                    <p class="text-xs text-white/40">
                        Admin Panel
                    </p>
                </div>
            </div>

            <nav class="flex-1 px-4 py-6 space-y-1.5">
                <a href="/admin/dashboard"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('admin/dashboard')
                        ? 'bg-white text-[#111827] font-semibold shadow-sm'
                        : 'text-white/55 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">
                        <path d="M3 10.5 10 4l7 6.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M5 9v7h10V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Dashboard
                </a>

                <a href="/admin/internship"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('admin/internship*')
                        ? 'bg-white text-[#111827] font-semibold shadow-sm'
                        : 'text-white/55 hover:bg-white/5 hover:text-white' }}">

                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.5" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Data Internship
                </a>

                <a href="/admin/absensi"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('admin/absensi*')
                        ? 'bg-white text-[#111827] font-semibold shadow-sm'
                        : 'text-white/55 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">
                        <circle cx="10" cy="10" r="7" stroke="currentColor" stroke-width="1.5" />
                        <path d="M10 6v4l2.5 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    Absensi
                </a>

                <a href="/admin/nilai"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('admin/nilai*')
                        ? 'bg-white text-[#111827] font-semibold shadow-sm'
                        : 'text-white/55 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                        <path d="M6 3h8l2 2v16H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Z" stroke="currentColor"
                            stroke-width="1.5" stroke-linejoin="round" />
                        <path d="M9 9h4M9 13h4M9 17h3" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" />
                    </svg>
                    Penilaian
                </a>

                <a href="/admin/laporan"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('admin/laporan*')
                        ? 'bg-white text-[#111827] font-semibold shadow-sm'
                        : 'text-white/55 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                        <path d="M5 3h14v18H5z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        <path d="M8 8h8M8 12h8M8 16h5" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" />
                    </svg>
                    Laporan
                </a>

                <a href="/admin/sertifikasi"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('admin/sertifikasi*')
                        ? 'bg-white text-[#111827] font-semibold shadow-sm'
                        : 'text-white/55 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M12 3l2.5 2.5L18 6l-.5 3.5L19 12l-1.5 2.5L18 18l-3.5.5L12 21l-2.5-2.5L6 18l.5-3.5L5 12l1.5-2.5L6 6l3.5-.5L12 3Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        <path d="M9.5 12l1.7 1.7L14.5 10" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Sertifikasi
                </a>
            </nav>

            <div class="px-4 py-4 border-t border-white/10">
                <div class="flex items-center gap-3 px-2 py-2">
                    <div
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-400 to-yellow-600 flex items-center justify-center text-white text-sm font-semibold flex-shrink-0 shadow-lg">
                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                    </div>

                    <div class="min-w-0">

                        <p class="text-sm font-medium text-white truncate">
                            {{ auth()->user()->name ?? 'Administrator' }}
                        </p>

                        <p class="text-xs text-white/40 truncate">
                            {{ auth()->user()->email ?? '-' }}
                        </p>

                    </div>
                </div>
            </div>
        </aside>

        @if (session('success'))
            <div id="success-alert"
                class="fixed top-6 right-6 z-50 w-[380px] max-w-[calc(100%-2rem)]
                        rounded-2xl border border-emerald-100 bg-white
                        p-4 shadow-2xl shadow-emerald-100/50
                        transition-all duration-500 ease-in-out">

                <div class="flex items-start gap-4">
                    <div
                        class="flex h-11 w-11 shrink-0 items-center justify-center
                                rounded-full bg-emerald-100">
                        <svg class="h-6 w-6 text-emerald-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                    </div>


                    <div class="flex-1">
                        <h3 class="text-sm font-bold text-slate-900">
                            Berhasil!
                        </h3>
                        <p class="mt-1 text-sm text-slate-500">
                            {{ session('success') }}
                        </p>
                    </div>

                    <button type="button" onclick="closeAlert()"
                        class="text-slate-300 hover:text-slate-500 transition">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="mt-4 h-1 overflow-hidden rounded-full bg-slate-100">
                    <div id="progress-bar" class="h-full rounded-full bg-emerald-500"
                        style="width: 100%; transition: width 4s linear;">
                    </div>
                </div>
            </div>

            <script>
                const alertBox = document.getElementById('success-alert');
                const progressBar = document.getElementById('progress-bar');

                function closeAlert() {
                    if (!alertBox) return;

                    alertBox.classList.add(
                        'translate-x-[120%]',
                        'opacity-0'
                    );

                    setTimeout(() => {
                        alertBox.remove();
                    }, 500);
                }

                setTimeout(() => {
                    if (progressBar) {
                        progressBar.style.width = '0%';
                    }
                }, 100);

                setTimeout(() => {
                    closeAlert();
                }, 4000);
            </script>
        @endif


        <div id="overlay" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-30 hidden md:hidden"></div>
        <div class="flex-1 md:ml-64 min-w-0">

            <header
                class="sticky top-0 z-20 bg-white/95 backdrop-blur border-b border-slate-200 px-4 md:px-8 py-4 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <button id="btn-toggle-sidebar"
                        class="md:hidden w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-700 hover:bg-slate-200 transition">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />
                        </svg>
                    </button>

                    <div>
                        <p class="text-xs font-medium text-slate-400 uppercase tracking-wider">
                            Internship Panel
                        </p>

                        <h2 class="font-serif text-xl md:text-2xl text-slate-900 mt-0.5">
                            Sertifikasi
                        </h2>

                        <p class="text-xs md:text-sm text-slate-400 mt-1">
                            {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
                        </p>

                    </div>
                </div>

                <div class="relative">
                    <button type="button" id="profile-menu-button"
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-400 to-yellow-600 flex items-center justify-center text-white text-sm font-semibold hover:scale-105 transition shadow-sm">
                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                    </button>

                    <div id="profile-menu"
                        class="hidden absolute right-0 mt-3 w-60 rounded-2xl bg-white shadow-xl shadow-slate-200/70 border border-slate-100 overflow-hidden z-50">

                        <div class="px-4 py-4 bg-slate-50 border-b border-slate-100">

                            <p class="text-sm font-semibold text-slate-800">
                                {{ auth()->user()->name ?? 'User' }}
                            </p>

                            <p class="text-xs text-slate-400 truncate mt-1">
                                {{ auth()->user()->email ?? '-' }}
                            </p>

                        </div>

                        <a href="/admin/profil"
                            class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:bg-slate-50 transition">

                            <div class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center">

                                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 9a3 3 0 11-6 0 3 3 0 016 0zm6 3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>

                            <span>
                                Profil Saya
                            </span>

                        </a>

                        <form method="POST" action="/logout">

                            @csrf

                            <button type="submit"
                                class="w-full flex items-center gap-3 px-4 py-3 text-sm text-red-500 hover:bg-red-50 transition">

                                <div class="w-8 h-8 rounded-lg bg-red-50 flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />

                                    </svg>

                                </div>

                                <span>
                                    Logout
                                </span>

                            </button>
                        </form>
                    </div>
                </div>

            </header>

            <main class="space-y-6 p-4 md:p-8">
                <section>
                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm md:p-6">
                        <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">
                            <div>
                                <div class="mb-2 flex items-center gap-2">
                                    <span class="h-2 w-2 rounded-full bg-amber-400"></span>
                                    <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                        Sertifikasi Internship
                                    </p>
                                </div>

                                <h1 class="font-serif text-2xl text-slate-900 md:text-3xl">
                                    Kelola Sertifikat Peserta
                                </h1>

                                <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-400">
                                    Kelola data sertifikat internship peserta.
                                    Admin dapat menambahkan nama serta periode
                                    internship sebelum mencetak sertifikat.
                                </p>
                            </div>

                            <div class="hidden h-16 w-16 flex-shrink-0 items-center justify-center rounded-2xl bg-amber-50 lg:flex">
                                <svg class="h-8 w-8 text-amber-500" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 3l2.5 2.5L18 6l-.5 3.5L19 12l-1.5 2.5L18 18l-3.5.5L12 21l-2.5-2.5L6 18l.5-3.5L5 12l1.5-2.5L6 6l3.5-.5L12 3Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                    <path d="M9.5 12l1.7 1.7L14.5 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                        Total Peserta
                                    </p>

                                    <p class="mt-2 text-3xl font-bold text-slate-800">
                                        {{ $totalInternship ?? 0 }}
                                    </p>

                                    <p class="mt-1 text-xs text-slate-400">
                                        Peserta internship
                                    </p>

                                </div>

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50">
                                    <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8Zm7-5v6m3-3h-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                        Sudah Bersertifikat
                                    </p>

                                    <p class="mt-2 text-3xl font-bold text-emerald-600">
                                        {{ $sudahBersertifikat ?? 0 }}
                                    </p>

                                    <p class="mt-1 text-xs text-slate-400">
                                        Sertifikat telah dibuat
                                    </p>

                                </div>

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50">
                                    <svg class="h-5 w-5 text-emerald-500" viewBox="0 0 24 24" fill="none">
                                        <path d="M12 3l2.5 2.5L18 6l-.5 3.5L19 12l-1.5 2.5L18 18l-3.5.5L12 21l-2.5-2.5L6 18l.5-3.5L5 12l1.5-2.5L6 6l3.5-.5L12 3Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                        <path d="M9.5 12l1.7 1.7L14.5 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                        Belum Bersertifikat
                                    </p>

                                    <p class="mt-2 text-3xl font-bold text-amber-500">
                                        {{ $belumBersertifikat ?? 0 }}
                                    </p>

                                    <p class="mt-1 text-xs text-slate-400">
                                        Menunggu sertifikat
                                    </p>

                                </div>

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50">
                                    <svg class="h-5 w-5 text-amber-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="8" stroke="currentColor"
                                            stroke-width="1.5" />
                                        <path d="M12 8v4" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <circle cx="12" cy="16" r=".8" fill="currentColor" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <div class="border-b border-slate-100 px-5 py-5 md:px-6">
                        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                            <div>
                                <h2 class="text-base font-semibold text-slate-800">
                                    Daftar Peserta Internship
                                </h2>

                                <p class="mt-1 text-xs text-slate-400">
                                    Pilih peserta untuk membuat atau mencetak sertifikat.
                                </p>
                            </div>

                            <div class="relative w-full md:w-80">
                                <svg class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m21 21-4.35-4.35M17 10.5A6.5 6.5 0 1 1 4 10.5a6.5 6.5 0 0 1 13 0Z" />
                                </svg>

                                <input type="text" id="search-internship" placeholder="Cari nama peserta..." class="w-full rounded-lg border border-slate-200 bg-slate-50 py-2.5 pl-9 pr-3 text-sm text-slate-700 placeholder:text-slate-400 transition focus:border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-200">
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-[#111827]">
                                    <th class="w-16 px-5 py-4 text-center text-xs font-semibold uppercase tracking-wider text-white">
                                        No
                                    </th>

                                    <th class="px-5 py-4 text-left text-xs font-semibold uppercase tracking-wider text-white">
                                        Nama Peserta
                                    </th>

                                    <th class="px-5 py-4 text-left text-xs font-semibold uppercase tracking-wider text-white">
                                        Periode Internship
                                    </th>

                                    <th class="px-5 py-4 text-center text-xs font-semibold uppercase tracking-wider text-white">
                                        Status
                                    </th>

                                    <th class="w-52 px-5 py-4 text-center text-xs font-semibold uppercase tracking-wider text-white">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>

                            <tbody id="internship-table-body" class="divide-y divide-slate-100">
                                @forelse ($internships ?? [] as $index => $internship)
                                    @php
                                        $sertifikasi = $internship->sertifikasis->first();
                                    @endphp

                                    <tr class="internship-row transition hover:bg-slate-50"
                                        data-name="{{ strtolower($internship->name ?? '') }}">
                                        <td class="px-5 py-4 text-center text-slate-500">
                                            {{ $index + 1 }}
                                        </td>

                                        <td class="px-5 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-yellow-600 text-sm font-semibold text-white shadow-sm">
                                                    {{ strtoupper(substr($internship->name ?? 'I', 0, 1)) }}
                                                </div>

                                                <div class="min-w-0">
                                                    <p class="truncate font-semibold text-slate-700">
                                                        {{ $internship->name ?? '-' }}
                                                    </p>

                                                    <p class="mt-0.5 truncate text-xs text-slate-400">
                                                        {{ $internship->email ?? '-' }}
                                                    </p>

                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-5 py-4">
                                            @if ($sertifikasi)
                                                <div>
                                                    <p class="text-sm font-medium text-slate-700">
                                                        {{ \Carbon\Carbon::parse($sertifikasi->tanggal_mulai)->translatedFormat('d F Y') }}
                                                    </p>

                                                    <p class="mt-0.5 text-xs text-slate-400">
                                                        s/d
                                                        {{ \Carbon\Carbon::parse($sertifikasi->tanggal_selesai)->translatedFormat('d F Y') }}
                                                    </p>
                                                </div>
                                            @else
                                                <span class="text-sm text-slate-300">
                                                    Belum diatur
                                                </span>
                                            @endif
                                        </td>

                                        <td class="px-5 py-4 text-center">
                                            @if ($sertifikasi)
                                                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-semibold text-emerald-700">
                                                    <span
                                                        class="h-1.5 w-1.5 rounded-full
                                                        bg-emerald-500">
                                                    </span>
                                                    Sudah Dibuat
                                                </span>
                                            @else
                                                <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-3 py-1.5 text-xs font-semibold text-amber-700">
                                                    <span
                                                        class="h-1.5 w-1.5 rounded-full
                                                        bg-amber-500">
                                                    </span>
                                                    Belum Dibuat
                                                </span>
                                            @endif
                                        </td>

                                        <td class="px-5 py-4 text-center">
                                            <div class="flex items-center justify-center gap-2">
                                                @if (!$sertifikasi)
                                                    <button type="button" data-modal-target="sertifikat-modal"
                                                        data-user-id="{{ $internship->id }}"
                                                        data-user-name="{{ $internship->name }}"
                                                        class="inline-flex items-center justify-center gap-1.5 rounded-lg bg-[#111827] px-3 py-2 text-xs font-semibold text-white shadow-sm transition hover:bg-slate-800">
                                                        <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="none">
                                                            <path d="M10 4v12M4 10h12" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round" />
                                                        </svg>
                                                        Tambah Data
                                                    </button>
                                                @else
                                                    <a href="/admin/sertifikasi/pdf/{{ $sertifikasi->id }}"
                                                        target="_blank" rel="noopener noreferrer"
                                                        class="inline-flex items-center justify-center gap-1.5 rounded-lg bg-amber-500 px-3 py-2 text-xs font-semibold text-white shadow-sm transition hover:bg-amber-600">
                                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M6 9V3h12v6M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5h-2M6 14h12v7H6v-7Z" />
                                                        </svg>
                                                        Cetak Sertifikat
                                                    </a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-5 py-12 text-center">
                                            <div class="flex flex-col items-center">
                                                <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100">
                                                    <svg class="h-7 w-7 text-slate-300" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5"
                                                            d="M12 3l2.5 2.5L18 6l-.5 3.5L19 12l-1.5 2.5L18 18l-3.5.5L12 21l-2.5-2.5L6 18l.5-3.5L5 12l1.5-2.5L6 6l3.5-.5L12 3Z" />
                                                    </svg>
                                                </div>

                                                <p class="text-sm font-semibold text-slate-600">
                                                    Belum ada peserta internship
                                                </p>

                                                <p class="mt-1 text-xs text-slate-400">
                                                    Data peserta internship akan
                                                    muncul di sini.
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div id="no-search-result" class="hidden px-5 py-12 text-center">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl bg-slate-100">
                                <svg class="h-6 w-6 text-slate-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <circle cx="11" cy="11" r="7" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <path d="m16 16 4 4" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                            </div>

                            <p class="mt-3 text-sm font-semibold text-slate-600">
                                Peserta tidak ditemukan
                            </p>

                            <p class="mt-1 text-xs text-slate-400">
                                Coba gunakan nama peserta yang berbeda.
                            </p>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <div id="sertifikat-modal" class="fixed inset-0 z-50 hidden items-center justify-centerbg-black/50 p-4">
        <div class="w-full max-w-lg overflow-hidden rounded-2xl bg-white shadow-2xl">
            <div class="flex items-center justify-between border-b border-slate-200 px-6 py-5">

                <div>
                    <h3 class="text-lg font-bold text-slate-800">
                        Tambah Data Sertifikat
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Lengkapi data sertifikat peserta internship.
                    </p>
                </div>

                <button type="button" data-modal-close="sertifikat-modal"
                    class="rounded-lg p-2 text-slate-400 transition hover:bg-slate-100 hover:text-slate-600">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">
                        <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <form id="sertifikat-form" method="POST" action="">
                @csrf
                <div class="space-y-5 px-6 py-6">
                    <div>
                        <label for="nama" class="mb-2 block text-sm font-semibold text-slate-700">
                            Nama Peserta
                        </label>

                        <input type="text" id="nama" name="nama" readonly
                            class="w-full cursor-not-allowed rounded-xl border border-slate-300 bg-slate-100 px-4 py-3 text-sm text-slate-500 outline-none">
                    </div>

                    <div>
                        <label for="tanggal_mulai" class="mb-2 block text-sm font-semibold text-slate-700">
                            Tanggal Mulai Internship
                        </label>

                        <input type="date" id="tanggal_mulai" name="tanggal_mulai" required class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-slate-400 focus:ring-2 focus:ring-slate-200">
                    </div>

                    <div>
                        <label for="tanggal_selesai"
                            class="mb-2 block text-sm font-semibold text-slate-700">
                            Tanggal Selesai Internship
                        </label>

                        <input type="date" id="tanggal_selesai" name="tanggal_selesai" required
                            class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-slate-400 focus:ring-2 focus:ring-slate-200">
                    </div>
                </div>

                <div class="flex justify-end gap-3 border-t border-slate-200 bg-slate-50 px-6 py-4">
                    <button type="button" data-modal-close="sertifikat-modal"
                        class="rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-600 transition hover:bg-slate-100">
                        Batal
                    </button>

                    <button type="submit"
                        class="inline-flex items-center gap-2 rounded-xl bg-[#111827] px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-slate-800">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none">
                            <path d="M5 12l4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const profileButton =
            document.getElementById('profile-menu-button');

        const profileMenu =
            document.getElementById('profile-menu');


        if (profileButton && profileMenu) {
            profileButton.addEventListener('click', function(event) {
                event.stopPropagation();
                profileMenu.classList.toggle('hidden');
            });


            document.addEventListener('click', function(event) {
                if (
                    !profileButton.contains(event.target) &&
                    !profileMenu.contains(event.target)
                ) {
                    profileMenu.classList.add('hidden');
                }
            });
        }
    </script>

    <script>
        const sidebar =
            document.getElementById('sidebar');

        const overlay =
            document.getElementById('overlay');

        const btnToggle =
            document.getElementById('btn-toggle-sidebar');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }

        if (btnToggle) {
            btnToggle.addEventListener('click', openSidebar);
        }

        if (overlay) {
            overlay.addEventListener('click', closeSidebar);
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput =
                document.getElementById('search-internship');
            const rows =
                document.querySelectorAll('.internship-row');
            const noResult =
                document.getElementById('no-search-result');
            if (!searchInput) {
                return;
            }

            searchInput.addEventListener('input', function() {
                const keyword =
                    this.value.toLowerCase().trim();
                let visibleCount = 0;
                rows.forEach(function(row) {
                    const name =
                        row.getAttribute('data-name') || '';

                    const isMatch =
                        name.includes(keyword);

                    row.style.display =
                        isMatch ? '' : 'none';

                    if (isMatch) {
                        visibleCount++;
                    }

                });

                noResult.classList.toggle(
                    'hidden',
                    visibleCount > 0
                );
            });
        });
    </script>

    <script>
        const sertifikatModal = document.getElementById('sertifikat-modal');
        const sertifikatForm = document.getElementById('sertifikat-form');

        const namaInput = document.getElementById('nama');
        const tanggalMulaiInput = document.getElementById('tanggal_mulai');
        const tanggalSelesaiInput = document.getElementById('tanggal_selesai');

        document.querySelectorAll('[data-modal-target="sertifikat-modal"]').forEach(button => {

            button.addEventListener('click', function() {

                const userId = this.dataset.userId;
                const userName = this.dataset.userName;

                namaInput.value = userName;

                tanggalMulaiInput.value = '';
                tanggalSelesaiInput.value = '';

                sertifikatForm.action = `/admin/sertifikasi/${userId}`;

                sertifikatModal.classList.remove('hidden');
                sertifikatModal.classList.add('flex');

            });

        });

        document.querySelectorAll('[data-modal-close="sertifikat-modal"]').forEach(button => {
            button.addEventListener('click', function() {
                sertifikatModal.classList.add('hidden');
                sertifikatModal.classList.remove('flex');
            });
        });

        sertifikatModal.addEventListener('click', function(event) {
            if (event.target === sertifikatModal) {
                sertifikatModal.classList.add('hidden');
                sertifikatModal.classList.remove('flex');
            }
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                sertifikatModal.classList.add('hidden');
                sertifikatModal.classList.remove('flex');
            }
        });
    </script>

</body>

</html>
