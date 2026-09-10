<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Cetak Laporan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen bg-slate-50 font-sans text-slate-800">

    <div class="flex min-h-screen">

        {{-- ============================================================
            SIDEBAR ADMIN
        ============================================================= --}}
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


        {{-- ============================================================
            MOBILE OVERLAY
        ============================================================= --}}
        <div id="overlay" class="fixed inset-0 z-30 hidden
            bg-black/40 backdrop-blur-sm md:hidden">
        </div>


        {{-- ============================================================
            MAIN CONTENT
        ============================================================= --}}
        <div class="min-w-0 flex-1 md:ml-64">


            {{-- ========================================================
                HEADER
            ========================================================= --}}
            <header
                class="sticky top-0 z-20 flex items-center
                justify-between border-b border-slate-200
                bg-white/95 px-4 py-4 backdrop-blur
                md:px-8">

                <div class="flex items-center gap-4">

                    {{-- Mobile Button --}}
                    <button id="btn-toggle-sidebar" type="button"
                        class="flex h-10 w-10 items-center
                        justify-center rounded-xl bg-slate-100
                        text-slate-700 transition hover:bg-slate-200
                        md:hidden">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">

                            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />

                        </svg>

                    </button>


                    {{-- Header Title --}}
                    <div>

                        <p
                            class="text-xs font-medium uppercase
                            tracking-wider text-slate-400">

                            Admin Panel

                        </p>

                        <h2 class="mt-0.5 font-serif text-xl
                            text-slate-900 md:text-2xl">

                            Dashboard

                        </h2>

                        <p class="mt-1 text-xs text-slate-400 md:text-sm">

                            {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}

                        </p>

                    </div>

                </div>


                {{-- ====================================================
                    PROFILE
                ===================================================== --}}
                <div class="relative">

                    <button type="button" id="profile-menu-button"
                        class="flex h-10 w-10 items-center
                        justify-center rounded-full
                        bg-gradient-to-br from-amber-400 to-yellow-600
                        text-sm font-semibold text-white shadow-sm
                        transition hover:scale-105">

                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}

                    </button>


                    {{-- Profile Dropdown --}}
                    <div id="profile-menu"
                        class="absolute right-0 z-50 mt-3 hidden
                        w-60 overflow-hidden rounded-2xl
                        border border-slate-100 bg-white
                        shadow-xl shadow-slate-200/70">

                        <div class="border-b border-slate-100
                            bg-slate-50 px-4 py-4">

                            <p class="text-sm font-semibold text-slate-800">

                                {{ auth()->user()->name ?? 'Administrator' }}

                            </p>

                            <p class="mt-1 truncate text-xs text-slate-400">

                                {{ auth()->user()->email ?? '-' }}

                            </p>

                        </div>


                        {{-- Profile --}}
                        <a href="/admin/profil"
                            class="flex items-center gap-3 px-4 py-3
                            text-sm text-slate-600 transition
                            hover:bg-slate-50">

                            <div
                                class="flex h-8 w-8 items-center
                                justify-center rounded-lg bg-slate-100">

                                <svg class="h-4 w-4 text-slate-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 9a3 3 0 11-6 0 3 3 0 016 0zm6 3a9 9 0 11-18 0 9 9 0 0118 0z" />

                                </svg>

                            </div>

                            Profil Saya

                        </a>


                        {{-- Logout --}}
                        <form method="POST" action="/logout">

                            @csrf

                            <button type="submit"
                                class="flex w-full items-center gap-3
                                px-4 py-3 text-sm text-red-500
                                transition hover:bg-red-50">

                                <div
                                    class="flex h-8 w-8 items-center
                                    justify-center rounded-lg bg-red-50">

                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />

                                    </svg>

                                </div>

                                Logout

                            </button>

                        </form>

                    </div>

                </div>

            </header>


            {{-- ========================================================
                CONTENT
            ========================================================= --}}
            <main class="space-y-6 p-4 md:p-8">


                {{-- ====================================================
                    WELCOME
                ===================================================== --}}
                <section>

                    <div
                        class="rounded-2xl border border-slate-200
                        bg-white p-5 shadow-sm md:p-6">

                        <div
                            class="flex flex-col gap-4
                            md:flex-row md:items-center
                            md:justify-between">

                            <div>

                                <div class="mb-2 flex items-center gap-2">

                                    <span class="h-2 w-2 rounded-full bg-amber-400">
                                    </span>

                                    <p
                                        class="text-xs font-medium
                                        uppercase tracking-wider
                                        text-slate-400">

                                        Administrator

                                    </p>

                                </div>

                                <h1
                                    class="font-serif text-2xl
                                    text-slate-900 md:text-3xl">

                                    Selamat Datang,
                                    {{ auth()->user()->name ?? 'Administrator' }}

                                </h1>

                                <p class="mt-1 text-sm text-slate-400">

                                    Kelola data internship, absensi,
                                    penilaian, dan laporan peserta.

                                </p>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    STATISTIK
                ===================================================== --}}
                <section>

                    <div class="mb-4">

                        <h2 class="text-base font-semibold text-slate-800">

                            Ringkasan

                        </h2>

                        <p class="mt-1 text-xs text-slate-400">

                            Informasi singkat mengenai peserta internship.

                        </p>

                    </div>


                    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">


                        {{-- Total Internship --}}
                        <div
                            class="rounded-2xl border border-slate-200
                            bg-white p-5 shadow-sm">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p
                                        class="text-xs font-medium
                                        uppercase tracking-wider
                                        text-slate-400">

                                        Total Peserta

                                    </p>

                                    <p
                                        class="mt-2 text-3xl font-bold
                                        text-slate-800">

                                        {{ $totalInternship ?? 0 }}

                                    </p>

                                    <p class="mt-1 text-xs text-slate-400">

                                        Peserta internship

                                    </p>

                                </div>

                                <div
                                    class="flex h-10 w-10 items-center
                                    justify-center rounded-xl bg-blue-50">

                                    <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8Zm7-5v6m3-3h-6" />

                                    </svg>

                                </div>

                            </div>

                        </div>


                        {{-- Peserta Aktif --}}
                        <div
                            class="rounded-2xl border border-slate-200
                            bg-white p-5 shadow-sm">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p
                                        class="text-xs font-medium
                                        uppercase tracking-wider
                                        text-slate-400">

                                        Peserta Aktif

                                    </p>

                                    <p
                                        class="mt-2 text-3xl font-bold
                                        text-emerald-600">

                                        {{ $internshipAktif ?? 0 }}

                                    </p>

                                    <p class="mt-1 text-xs text-slate-400">

                                        Akun aktif

                                    </p>

                                </div>

                                <div
                                    class="flex h-10 w-10 items-center
                                    justify-center rounded-xl bg-emerald-50">

                                    <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <circle cx="12" cy="12" r="8" stroke="currentColor"
                                            stroke-width="1.5" />

                                        <path d="m8.5 12 2.2 2.2 4.8-5" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />

                                    </svg>

                                </div>

                            </div>

                        </div>


                        {{-- Hadir Hari Ini --}}
                        <div
                            class="rounded-2xl border border-slate-200
                            bg-white p-5 shadow-sm">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p
                                        class="text-xs font-medium
                                        uppercase tracking-wider
                                        text-slate-400">

                                        Hadir Hari Ini

                                    </p>

                                    <p
                                        class="mt-2 text-3xl font-bold
                                        text-amber-500">

                                        {{ $hadirHariIni ?? 0 }}

                                    </p>

                                    <p class="mt-1 text-xs text-slate-400">

                                        Peserta hadir

                                    </p>

                                </div>

                                <div
                                    class="flex h-10 w-10 items-center
                                    justify-center rounded-xl bg-amber-50">

                                    <svg class="h-5 w-5 text-amber-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <circle cx="12" cy="12" r="8" stroke="currentColor"
                                            stroke-width="1.5" />

                                        <path d="M12 8v4l2.5 1.5" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />

                                    </svg>

                                </div>

                            </div>

                        </div>


                        {{-- Belum Absen --}}
                        <div
                            class="rounded-2xl border border-slate-200
                            bg-white p-5 shadow-sm">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p
                                        class="text-xs font-medium
                                        uppercase tracking-wider
                                        text-slate-400">

                                        Belum Absen

                                    </p>

                                    <p
                                        class="mt-2 text-3xl font-bold
                                        text-red-500">

                                        {{ $belumAbsen ?? 0 }}

                                    </p>

                                    <p class="mt-1 text-xs text-slate-400">

                                        Peserta hari ini

                                    </p>

                                </div>

                                <div
                                    class="flex h-10 w-10 items-center
                                    justify-center rounded-xl bg-red-50">

                                    <svg class="h-5 w-5 text-red-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 8v4m0 4h.01M10.29 3.86 2.82 17a2 2 0 001.74 3h14.88a2 2 0 001.74-3L13.71 3.86a2 2 0 00-3.42 0Z" />

                                    </svg>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    REKAP ABSENSI
                ===================================================== --}}
                <section>

                    <div class="mb-4">

                        <h2 class="text-base font-semibold text-slate-800">

                            Rekap Kehadiran

                        </h2>

                        <p class="mt-1 text-xs text-slate-400">

                            Rekap status absensi peserta internship.

                        </p>

                    </div>


                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">


                        {{-- Hadir --}}
                        <div
                            class="rounded-2xl border border-slate-200
                            bg-white p-5 shadow-sm">

                            <p
                                class="text-xs font-medium uppercase
                                tracking-wider text-slate-400">

                                Hadir

                            </p>

                            <p class="mt-2 text-3xl font-bold
                                text-emerald-600">

                                {{ $jumlahHadir ?? 0 }}

                            </p>

                            <p class="mt-1 text-xs text-slate-400">

                                Total kehadiran

                            </p>

                        </div>


                        {{-- Sakit --}}
                        <div
                            class="rounded-2xl border border-slate-200
                            bg-white p-5 shadow-sm">

                            <p
                                class="text-xs font-medium uppercase
                                tracking-wider text-slate-400">

                                Sakit

                            </p>

                            <p class="mt-2 text-3xl font-bold
                                text-amber-500">

                                {{ $jumlahSakit ?? 0 }}

                            </p>

                            <p class="mt-1 text-xs text-slate-400">

                                Total sakit

                            </p>

                        </div>


                        {{-- Izin --}}
                        <div
                            class="rounded-2xl border border-slate-200
                            bg-white p-5 shadow-sm">

                            <p
                                class="text-xs font-medium uppercase
                                tracking-wider text-slate-400">

                                Izin

                            </p>

                            <p class="mt-2 text-3xl font-bold
                                text-blue-500">

                                {{ $jumlahIzin ?? 0 }}

                            </p>

                            <p class="mt-1 text-xs text-slate-400">

                                Total izin

                            </p>

                        </div>


                        {{-- Alfa --}}
                        <div
                            class="rounded-2xl border border-slate-200
                            bg-white p-5 shadow-sm">

                            <p
                                class="text-xs font-medium uppercase
                                tracking-wider text-slate-400">

                                Alfa

                            </p>

                            <p class="mt-2 text-3xl font-bold
                                text-red-500">

                                {{ $jumlahAlfa ?? 0 }}

                            </p>

                            <p class="mt-1 text-xs text-slate-400">

                                Tanpa keterangan

                            </p>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
    DAFTAR PESERTA INTERNSHIP
===================================================== --}}
                <section class="overflow-hidden rounded-2xl
    border border-slate-200 bg-white shadow-sm">

                    {{-- ========================================================
        HEADER TABLE
    ========================================================= --}}
                    <div class="border-b border-slate-100
        px-5 py-5 md:px-6">

                        <div
                            class="flex flex-col gap-3
            md:flex-row md:items-center
            md:justify-between">

                            <div>

                                <h2 class="text-base font-semibold
                    text-slate-800">

                                    Daftar Peserta Internship

                                </h2>

                                <p class="mt-1 text-xs text-slate-400">

                                    Pilih peserta untuk mencetak laporan internship.

                                </p>

                            </div>

                            <div class="rounded-lg bg-slate-100
                px-3 py-2">

                                <p class="text-xs font-medium text-slate-500">

                                    Total Peserta:
                                    <span class="font-semibold text-slate-800">
                                        {{ $totalInternship ?? 0 }}
                                    </span>

                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- ========================================================
        TABLE
    ========================================================= --}}
                    <div class="overflow-x-auto">

                        <table class="w-full text-sm">

                            <thead>

                                <tr class="bg-[#111827]">

                                    <th
                                        class="w-16 px-5 py-4 text-center
                        text-xs font-semibold uppercase
                        tracking-wider text-white">

                                        No

                                    </th>

                                    <th
                                        class="px-5 py-4 text-left
                        text-xs font-semibold uppercase
                        tracking-wider text-white">

                                        Nama Peserta

                                    </th>

                                    <th
                                        class="w-48 px-5 py-4 text-center
                        text-xs font-semibold uppercase
                        tracking-wider text-white">

                                        Aksi

                                    </th>

                                </tr>

                            </thead>


                            <tbody class="divide-y divide-slate-100">

                                @forelse ($internships ?? [] as $index => $internship)
                                    <tr class="transition hover:bg-slate-50">

                                        {{-- ====================================================
                            NOMOR
                        ===================================================== --}}
                                        <td class="px-5 py-4 text-center
                            text-slate-500">

                                            {{ $index + 1 }}

                                        </td>


                                        {{-- ====================================================
                            NAMA PESERTA
                        ===================================================== --}}
                                        <td class="px-5 py-4">

                                            <div class="flex items-center gap-3">

                                                {{-- Avatar --}}
                                                <div
                                                    class="flex h-10 w-10 flex-shrink-0
                                    items-center justify-center
                                    rounded-full
                                    bg-gradient-to-br
                                    from-blue-500 to-indigo-600
                                    text-sm font-semibold
                                    text-white shadow-sm">

                                                    {{ strtoupper(substr($internship->name ?? 'I', 0, 1)) }}

                                                </div>


                                                {{-- Nama --}}
                                                <div class="min-w-0">

                                                    <p
                                                        class="truncate font-semibold
                                        text-slate-700">

                                                        {{ $internship->name ?? '-' }}

                                                    </p>

                                                    <p
                                                        class="mt-0.5 truncate text-xs
                                        text-slate-400">

                                                        Peserta Internship

                                                    </p>

                                                </div>

                                            </div>

                                        </td>


                                        {{-- ====================================================
                            AKSI
                        ===================================================== --}}
                                        <td class="px-5 py-4 text-center">

                                            <a href="{{ route('admin.laporan.pdf', $internship->id) }}"
                                                target="_blank" rel="noopener noreferrer"
                                                class="inline-flex items-center
                                                justify-center gap-2 rounded-xl
                                             bg-[#111827] px-4 py-2.5
                                                text-xs font-semibold text-white
                                             shadow-sm transition
                                                hover:bg-slate-800">

                                                <svg class="h-4 w-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">

                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M6 9V3h12v6M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2M6 14h12v7H6v-7Z" />

                                                </svg>

                                                Cetak PDF

                                            </a>

                                        </td>

                                    </tr>

                                @empty

                                    {{-- ========================================================
                        DATA KOSONG
                    ========================================================= --}}
                                    <tr>

                                        <td colspan="3" class="px-5 py-12 text-center">

                                            <div class="flex flex-col
                                items-center">

                                                <div
                                                    class="mb-4 flex h-14 w-14
                                    items-center justify-center
                                    rounded-2xl bg-slate-100">

                                                    <svg class="h-7 w-7 text-slate-300" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">

                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5"
                                                            d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8Zm7-5v6m3-3h-6" />

                                                    </svg>

                                                </div>

                                                <p
                                                    class="text-sm font-semibold
                                                     text-slate-600">

                                                    Belum ada peserta internship

                                                </p>

                                                <p class="mt-1 text-xs text-slate-400">

                                                    Data peserta internship akan muncul di sini.

                                                </p>

                                            </div>

                                        </td>

                                    </tr>
                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </section>


                {{-- ====================================================
                    AKSI CEPAT
                ===================================================== --}}
                <section>

                    <div class="mb-4">

                        <h2 class="text-base font-semibold
                            text-slate-800">

                            Aksi Cepat

                        </h2>

                        <p class="mt-1 text-xs text-slate-400">

                            Akses cepat untuk mengelola sistem internship.

                        </p>

                    </div>


                    <div class="grid gap-4 md:grid-cols-3">


                        {{-- Kelola Peserta --}}
                        <a href="/admin/internship"
                            class="group rounded-2xl border
                            border-slate-200 bg-white p-5
                            shadow-sm transition
                            hover:-translate-y-0.5 hover:shadow-md">

                            <div
                                class="mb-4 flex h-10 w-10
                                items-center justify-center
                                rounded-xl bg-blue-50">

                                <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8Zm7-5v6m3-3h-6" />

                                </svg>

                            </div>

                            <h3 class="font-semibold text-slate-800">

                                Kelola Peserta

                            </h3>

                            <p class="mt-1 text-xs leading-5
                                text-slate-400">

                                Lihat dan kelola akun peserta internship.

                            </p>

                        </a>


                        {{-- Kelola Absensi --}}
                        <a href="/admin/absensi"
                            class="group rounded-2xl border
                            border-slate-200 bg-white p-5
                            shadow-sm transition
                            hover:-translate-y-0.5 hover:shadow-md">

                            <div
                                class="mb-4 flex h-10 w-10
                                items-center justify-center
                                rounded-xl bg-amber-50">

                                <svg class="h-5 w-5 text-amber-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <circle cx="12" cy="12" r="8" stroke="currentColor"
                                        stroke-width="1.5" />

                                    <path d="M12 8v4l2.5 1.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />

                                </svg>

                            </div>

                            <h3 class="font-semibold text-slate-800">

                                Kelola Absensi

                            </h3>

                            <p class="mt-1 text-xs leading-5
                                text-slate-400">

                                Periksa dan tentukan status absensi peserta.

                            </p>

                        </a>


                        {{-- Penilaian --}}
                        <a href="/admin/nilai"
                            class="group rounded-2xl border
                            border-slate-200 bg-white p-5
                            shadow-sm transition
                            hover:-translate-y-0.5 hover:shadow-md">

                            <div
                                class="mb-4 flex h-10 w-10
                                items-center justify-center
                                rounded-xl bg-emerald-50">

                                <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 3l2.09 4.26L19 8l-3.5 3.41L16.18 16 12 13.77 7.82 16l.68-4.59L5 8l4.91-.74L12 3Z" />

                                </svg>

                            </div>

                            <h3 class="font-semibold text-slate-800">

                                Berikan Penilaian

                            </h3>

                            <p class="mt-1 text-xs leading-5
                                text-slate-400">

                                Input dan kelola nilai peserta internship.

                            </p>

                        </a>

                    </div>

                </section>


            </main>

        </div>

    </div>


    {{-- ============================================================
        PROFILE DROPDOWN SCRIPT
    ============================================================= --}}
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


    {{-- ============================================================
        MOBILE SIDEBAR SCRIPT
    ============================================================= --}}
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

</body>

</html>
