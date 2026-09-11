<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-slate-50 min-h-screen text-slate-800">

    <div class="flex min-h-screen">

        {{-- =====================================================
            SIDEBAR
        ====================================================== --}}
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-40 w-64 bg-[#111827] text-white flex flex-col
            transform -translate-x-full md:translate-x-0 transition-transform duration-200 shadow-2xl">

            {{-- Logo --}}
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


            {{-- Navigation --}}
            <nav class="flex-1 px-4 py-6 space-y-1.5">

                {{-- Dashboard --}}
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


                {{-- Data Internship --}}
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


                {{-- Absensi --}}
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


                {{-- Penilaian --}}
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


                {{-- Laporan --}}
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
            </nav>


            {{-- User Sidebar --}}
            <div class="px-4 py-4 border-t border-white/10">

                <div class="flex items-center gap-3 px-2 py-2">

                    <div
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-400 to-yellow-600
                        flex items-center justify-center text-white text-sm font-semibold
                        flex-shrink-0 shadow-lg">

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


        {{-- =====================================================
            MOBILE OVERLAY
        ====================================================== --}}
        <div id="overlay" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-30 hidden md:hidden">
        </div>


        {{-- =====================================================
            MAIN
        ====================================================== --}}
        <div class="flex-1 md:ml-64 min-w-0">

            {{-- =================================================
                HEADER
            ================================================== --}}
            <header
                class="sticky top-0 z-20 bg-white/95 backdrop-blur border-b border-slate-200
                px-4 md:px-8 py-4 flex items-center justify-between">

                <div class="flex items-center gap-4">

                    {{-- Mobile Sidebar Button --}}
                    <button id="btn-toggle-sidebar"
                        class="md:hidden w-10 h-10 rounded-xl bg-slate-100
                        flex items-center justify-center text-slate-700
                        hover:bg-slate-200 transition">

                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">

                            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />

                        </svg>

                    </button>


                    <div>

                        <p class="text-xs font-medium text-slate-400 uppercase tracking-wider">
                            Admin Dashboard
                        </p>

                        <h2 class="font-serif text-xl md:text-2xl text-slate-900 mt-0.5">
                            Halo,
                            {{ explode(' ', auth()->user()->name ?? 'Administrator')[0] }}
                        </h2>

                        <p class="text-xs md:text-sm text-slate-400 mt-1">
                            {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
                        </p>

                    </div>

                </div>


                {{-- Profile --}}
                <div class="relative">

                    <button type="button" id="profile-menu-button"
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-400 to-yellow-600
                        flex items-center justify-center text-white text-sm font-semibold
                        hover:scale-105 transition shadow-sm">

                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}

                    </button>


                    {{-- Profile Dropdown --}}
                    <div id="profile-menu"
                        class="hidden absolute right-0 mt-3 w-60 rounded-2xl bg-white
                        shadow-xl shadow-slate-200/70 border border-slate-100
                        overflow-hidden z-50">

                        <div class="px-4 py-4 bg-slate-50 border-b border-slate-100">

                            <p class="text-sm font-semibold text-slate-800">
                                {{ auth()->user()->name ?? 'Administrator' }}
                            </p>

                            <p class="text-xs text-slate-400 truncate mt-1">
                                {{ auth()->user()->email ?? '-' }}
                            </p>

                        </div>


                        {{-- Profile --}}
                        <a href="/admin/profil"
                            class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600
                            hover:bg-slate-50 transition">

                            <div class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center">

                                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 9a3 3 0 11-6 0 3 3 0 016 0zm6 3a9 9 0 11-18 0 9 9 0 0118 0z" />

                                </svg>

                            </div>

                            <span>Profil Saya</span>

                        </a>


                        {{-- Logout --}}
                        <form method="POST" action="/logout">

                            @csrf

                            <button type="submit"
                                class="w-full flex items-center gap-3 px-4 py-3 text-sm
                                text-red-500 hover:bg-red-50 transition">

                                <div class="w-8 h-8 rounded-lg bg-red-50 flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />

                                    </svg>

                                </div>

                                <span>Logout</span>

                            </button>

                        </form>

                    </div>

                </div>

            </header>


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

            {{-- =================================================
                CONTENT
            ================================================== --}}
            <main class="p-4 md:p-8 space-y-8">


                {{-- =================================================
                    WELCOME CARD
                ================================================== --}}
                <section
                    class="relative overflow-hidden rounded-3xl bg-[#111827]
                    p-6 md:p-8 text-white shadow-xl shadow-slate-200">

                    {{-- Decorative Circle --}}
                    <div class="absolute -right-16 -top-20 w-64 h-64 rounded-full bg-amber-400/10">
                    </div>

                    <div class="absolute -right-5 -bottom-28 w-72 h-72 rounded-full bg-white/5">
                    </div>


                    <div
                        class="relative z-10 flex flex-col lg:flex-row
                        lg:items-center lg:justify-between gap-6">

                        <div>

                            <div
                                class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full
                                bg-white/10 text-white/70 text-xs font-medium mb-4">

                                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>

                                Admin Panel

                            </div>


                            <h1 class="font-serif text-2xl md:text-4xl">
                                Selamat datang,
                                {{ explode(' ', auth()->user()->name ?? 'Administrator')[0] }}
                            </h1>


                            <p class="text-white/50 text-sm mt-2 max-w-xl">
                                Kelola data internship, pantau absensi, berikan penilaian,
                                dan kelola laporan melalui dashboard admin.
                            </p>

                        </div>


                        {{-- Date --}}
                        <div class="bg-white/10 backdrop-blur rounded-2xl px-5 py-4 min-w-[190px]">

                            <p class="text-xs text-white/40">
                                Hari ini
                            </p>

                            <p class="text-lg font-semibold mt-1">
                                {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}
                            </p>

                            <p class="text-xs text-white/40 mt-1">
                                {{ \Carbon\Carbon::now()->translatedFormat('l') }}
                            </p>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                    STATISTIK
                ================================================== --}}
                <section>

                    <div class="mb-4">

                        <h3 class="text-lg font-semibold text-slate-800">
                            Ringkasan Hari Ini
                        </h3>

                        <p class="text-sm text-slate-400 mt-1">
                            Informasi kehadiran internship hari ini.
                        </p>

                    </div>


                    <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">


                        {{-- Total Internship --}}
                        <div
                            class="rounded-2xl border border-slate-200 bg-white
                            p-5 shadow-sm transition hover:shadow-md">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-xs font-medium text-slate-400">
                                        Total Internship
                                    </p>

                                    <p class="mt-2 font-serif text-3xl text-slate-700">
                                        {{ $totalInternship }}
                                    </p>

                                </div>


                                <div
                                    class="flex h-11 w-11 items-center justify-center
                                    rounded-xl bg-slate-100">

                                    <svg class="h-5 w-5 text-slate-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-9a4 4 0 110 8 4 4 0 010-8zm6 4a3 3 0 11-6 0" />

                                    </svg>

                                </div>

                            </div>

                        </div>


                        {{-- Hadir --}}
                        <div
                            class="rounded-2xl border border-slate-200 bg-white
                            p-5 shadow-sm transition hover:shadow-md">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-xs font-medium text-slate-400">
                                        Hadir Hari Ini
                                    </p>

                                    <p class="mt-2 font-serif text-3xl text-emerald-600">
                                        {{ $hadirHariIni }}
                                    </p>

                                </div>


                                <div
                                    class="flex h-11 w-11 items-center justify-center
                                    rounded-xl bg-emerald-50">

                                    <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />

                                    </svg>

                                </div>

                            </div>

                        </div>


                        {{-- Izin --}}
                        <div
                            class="rounded-2xl border border-slate-200 bg-white
                            p-5 shadow-sm transition hover:shadow-md">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-xs font-medium text-slate-400">
                                        Izin Hari Ini
                                    </p>

                                    <p class="mt-2 font-serif text-3xl text-blue-500">
                                        {{ $izinHariIni }}
                                    </p>

                                </div>


                                <div
                                    class="flex h-11 w-11 items-center justify-center
                                    rounded-xl bg-blue-50">

                                    <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2z" />

                                    </svg>

                                </div>

                            </div>

                        </div>


                        {{-- Alfa --}}
                        <div
                            class="rounded-2xl border border-slate-200 bg-white
                            p-5 shadow-sm transition hover:shadow-md">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-xs font-medium text-slate-400">
                                        Alfa Hari Ini
                                    </p>

                                    <p class="mt-2 font-serif text-3xl text-red-500">
                                        {{ $alfaHariIni }}
                                    </p>

                                </div>


                                <div
                                    class="flex h-11 w-11 items-center justify-center
                                    rounded-xl bg-red-50">

                                    <svg class="h-5 w-5 text-red-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />

                                    </svg>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                    ABSENSI HARI INI
                ================================================== --}}
                <section>

                    <div class="flex items-center justify-between mb-4">

                        <div>

                            <h3 class="text-lg font-semibold text-slate-800">
                                Absensi Hari Ini
                            </h3>

                            <p class="text-sm text-slate-400 mt-1">
                                Pantau kehadiran seluruh internship hari ini.
                            </p>

                        </div>


                        <a href="/admin/absensi"
                            class="hidden md:inline-flex items-center gap-2 px-4 py-2
                            rounded-xl bg-slate-900 text-white text-xs font-medium
                            hover:bg-slate-800 transition">

                            Lihat Semua

                            <svg class="w-4 h-4" viewBox="0 0 20 20" fill="none">

                                <path d="M4 10h12M11 5l5 5-5 5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />

                            </svg>

                        </a>

                    </div>


                    {{-- Attendance Table --}}
                    <div
                        class="bg-white rounded-2xl border border-slate-200
                        overflow-hidden shadow-sm">

                        <div class="overflow-x-auto">

                            <table class="w-full text-sm">

                                <thead>

                                    <tr class="bg-slate-50 border-b border-slate-200">

                                        <th
                                            class="px-5 py-4 text-left text-xs font-semibold
                                            text-slate-500 uppercase tracking-wider">
                                            Nama
                                        </th>

                                        <th
                                            class="px-5 py-4 text-left text-xs font-semibold
                                            text-slate-500 uppercase tracking-wider">
                                            Jam Masuk
                                        </th>

                                        <th
                                            class="px-5 py-4 text-left text-xs font-semibold
                                            text-slate-500 uppercase tracking-wider">
                                            Jam Pulang
                                        </th>

                                        <th
                                            class="px-5 py-4 text-left text-xs font-semibold
                                            text-slate-500 uppercase tracking-wider">
                                            Status
                                        </th>

                                    </tr>

                                </thead>


                                <tbody class="divide-y divide-slate-100">

                                    @forelse ($absensisHariIni as $absensi)
                                        <tr class="hover:bg-slate-50/70 transition">

                                            {{-- Nama --}}
                                            <td class="px-5 py-4 whitespace-nowrap">

                                                <div class="flex items-center gap-3">

                                                    <div
                                                        class="w-9 h-9 rounded-full bg-slate-100
                                                        flex items-center justify-center
                                                        text-xs font-semibold text-slate-500">

                                                        {{ strtoupper(substr($absensi->user->name ?? 'U', 0, 1)) }}

                                                    </div>

                                                    <div>

                                                        <p class="font-medium text-slate-700">
                                                            {{ $absensi->user->name ?? '-' }}
                                                        </p>

                                                        <p class="text-xs text-slate-400">
                                                            {{ $absensi->user->email ?? '-' }}
                                                        </p>

                                                    </div>

                                                </div>

                                            </td>


                                            {{-- Jam Masuk --}}
                                            <td class="px-5 py-4 whitespace-nowrap">

                                                @if ($absensi->jam_masuk)
                                                    <span
                                                        class="inline-flex items-center gap-2
                                                        font-medium text-emerald-600">

                                                        <span class="w-2 h-2 rounded-full bg-emerald-500">
                                                        </span>

                                                        {{ $absensi->jam_masuk }}

                                                    </span>
                                                @else
                                                    <span class="text-slate-300">
                                                        -
                                                    </span>
                                                @endif

                                            </td>


                                            {{-- Jam Pulang --}}
                                            <td class="px-5 py-4 whitespace-nowrap">

                                                @if ($absensi->jam_pulang)
                                                    <span class="font-medium text-slate-600">
                                                        {{ $absensi->jam_pulang }}
                                                    </span>
                                                @else
                                                    <span class="text-slate-300">
                                                        -
                                                    </span>
                                                @endif

                                            </td>


                                            {{-- Status --}}
                                            <td class="px-5 py-4 whitespace-nowrap">

                                                @if ($absensi->status === 'hadir')
                                                    <span
                                                        class="inline-flex items-center gap-1.5
                                                        px-3 py-1.5 rounded-full text-xs font-medium
                                                        bg-emerald-50 text-emerald-600">

                                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500">
                                                        </span>

                                                        Hadir

                                                    </span>
                                                @elseif ($absensi->status === 'sakit')
                                                    <span
                                                        class="inline-flex items-center gap-1.5
                                                        px-3 py-1.5 rounded-full text-xs font-medium
                                                        bg-amber-50 text-amber-600">

                                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500">
                                                        </span>

                                                        Sakit

                                                    </span>
                                                @elseif ($absensi->status === 'izin')
                                                    <span
                                                        class="inline-flex items-center gap-1.5
                                                        px-3 py-1.5 rounded-full text-xs font-medium
                                                        bg-blue-50 text-blue-600">

                                                        <span class="w-1.5 h-1.5 rounded-full bg-blue-500">
                                                        </span>

                                                        Izin

                                                    </span>
                                                @elseif ($absensi->status === 'alfa')
                                                    <span
                                                        class="inline-flex items-center gap-1.5
                                                        px-3 py-1.5 rounded-full text-xs font-medium
                                                        bg-red-50 text-red-600">

                                                        <span class="w-1.5 h-1.5 rounded-full bg-red-500">
                                                        </span>

                                                        Alfa

                                                    </span>
                                                @endif

                                            </td>

                                        </tr>

                                    @empty

                                        <tr>

                                            <td colspan="4" class="px-5 py-14 text-center">

                                                <div class="flex flex-col items-center">

                                                    <div
                                                        class="w-14 h-14 rounded-2xl bg-slate-100
                                                        flex items-center justify-center mb-4">

                                                        <svg class="w-7 h-7 text-slate-300" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">

                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />

                                                        </svg>

                                                    </div>

                                                    <p class="text-sm font-semibold text-slate-600">
                                                        Belum ada data absensi hari ini
                                                    </p>

                                                    <p class="text-xs text-slate-400 mt-1">
                                                        Data absensi internship akan muncul di sini.
                                                    </p>

                                                </div>

                                            </td>

                                        </tr>
                                    @endforelse

                                </tbody>

                            </table>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                    STATUS INTERNSHIP
                ================================================== --}}
                <section>

                    <div class="mb-4">

                        <h3 class="text-lg font-semibold text-slate-800">
                            Status Internship
                        </h3>

                        <p class="text-sm text-slate-400 mt-1">
                            Informasi status akun internship.
                        </p>

                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">


                        {{-- Aktif --}}
                        <div
                            class="rounded-2xl border border-slate-200 bg-white
                            p-5 shadow-sm transition hover:shadow-md">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-xs font-medium text-slate-400">
                                        Internship Aktif
                                    </p>

                                    <p class="mt-2 font-serif text-3xl text-emerald-600">
                                        {{ $internshipAktif }}
                                    </p>

                                    <p class="text-xs text-slate-400 mt-1">
                                        Akun yang dapat mengakses sistem
                                    </p>

                                </div>


                                <div
                                    class="flex h-11 w-11 items-center justify-center
                                    rounded-xl bg-emerald-50">

                                    <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />

                                    </svg>

                                </div>

                            </div>

                        </div>


                        {{-- Tidak Aktif --}}
                        <div
                            class="rounded-2xl border border-slate-200 bg-white
                            p-5 shadow-sm transition hover:shadow-md">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-xs font-medium text-slate-400">
                                        Internship Tidak Aktif
                                    </p>

                                    <p class="mt-2 font-serif text-3xl text-red-500">
                                        {{ $internshipTidakAktif }}
                                    </p>

                                    <p class="text-xs text-slate-400 mt-1">
                                        Akun yang tidak dapat mengakses sistem
                                    </p>

                                </div>


                                <div
                                    class="flex h-11 w-11 items-center justify-center
                                    rounded-xl bg-red-50">

                                    <svg class="h-5 w-5 text-red-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />

                                    </svg>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

            </main>

        </div>

    </div>


    {{-- =====================================================
        PROFILE DROPDOWN SCRIPT
    ====================================================== --}}
    <script>
        const profileButton = document.getElementById('profile-menu-button');
        const profileMenu = document.getElementById('profile-menu');

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
    </script>


    {{-- =====================================================
        MOBILE SIDEBAR SCRIPT
    ====================================================== --}}
    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const btnToggle = document.getElementById('btn-toggle-sidebar');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }

        btnToggle.addEventListener('click', openSidebar);
        overlay.addEventListener('click', closeSidebar);
    </script>

</body>

</html>
