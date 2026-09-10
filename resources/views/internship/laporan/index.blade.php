<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laporan Internship Panel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @media print {

            @page {
                size: A4;
                margin: 12mm;
            }

            body {
                background: white !important;
            }

            .no-print {
                display: none !important;
            }

            .print-area {
                width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
            }

            .print-card {
                border: 1px solid #e2e8f0 !important;
                box-shadow: none !important;
            }

            table {
                page-break-inside: auto;
            }

            tr {
                page-break-inside: avoid;
                page-break-after: auto;
            }

            .avoid-break {
                page-break-inside: avoid;
            }
        }
    </style>
</head>


<body class="min-h-screen bg-slate-50 font-sans text-slate-800">

    <div class="flex min-h-screen">

        {{-- ============================================================
            SIDEBAR
        ============================================================= --}}
        <aside id="sidebar"
            class="no-print fixed inset-y-0 left-0 z-40 flex w-64
            -translate-x-full transform flex-col
            bg-[#111827] text-white shadow-2xl
            transition-transform duration-200
            md:translate-x-0">

            {{-- Logo --}}
            <div class="flex items-center gap-3
                border-b border-white/10 px-6 py-6">

                <div class="h-10 w-10 flex-shrink-0 overflow-hidden
                    rounded-xl bg-white shadow-sm">

                    <img src="{{ asset('images/bts.png') }}" alt="Logo" class="h-full w-full object-contain">

                </div>

                <div>
                    <p class="font-serif text-lg leading-tight text-white">
                        Absensi
                    </p>

                    <p class="text-xs text-white/40">
                        Internship Panel
                    </p>
                </div>

            </div>


            {{-- Navigation --}}
            <nav class="flex-1 space-y-1.5 px-4 py-6">

                {{-- Dashboard --}}
                <a href="/internship/dashboard"
                    class="flex items-center gap-3 rounded-xl px-3 py-3
                    text-sm transition
                    {{ request()->is('internship/dashboard') ? 'bg-white font-semibold text-[#111827] shadow-sm' : 'text-white/55 hover:bg-white/5 hover:text-white' }}">

                    <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">

                        <path d="M3 10.5 10 4l7 6.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />

                        <path d="M5 9v7h10V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />

                    </svg>

                    Dashboard

                </a>


                {{-- Absensi --}}
                <a href="/internship/absensi"
                    class="flex items-center gap-3 rounded-xl px-3 py-3
                    text-sm transition
                    {{ request()->is('internship/absensi*') ? 'bg-white font-semibold text-[#111827] shadow-sm' : 'text-white/55 hover:bg-white/5 hover:text-white' }}">

                    <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">

                        <circle cx="10" cy="10" r="7" stroke="currentColor" stroke-width="1.5" />

                        <path d="M10 6v4l2.5 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />

                    </svg>

                    Absensi

                </a>


                {{-- Nilai --}}
                <a href="/internship/nilai"
                    class="flex items-center gap-3 rounded-xl px-3 py-3
                    text-sm transition
                    {{ request()->is('internship/nilai*') ? 'bg-white font-semibold text-[#111827] shadow-sm' : 'text-white/55 hover:bg-white/5 hover:text-white' }}">

                    <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">

                        <path d="M6 3h8l2 2v12H4V5l2-2Z" stroke="currentColor" stroke-width="1.5"
                            stroke-linejoin="round" />

                        <path d="M7 8h6M7 11h6M7 14h4" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" />

                    </svg>

                    Nilai Saya

                </a>


                {{-- Laporan --}}
                <a href="/internship/laporan"
                    class="flex items-center gap-3 rounded-xl px-3 py-3
                    text-sm transition
                    {{ request()->is('internship/laporan*') ? 'bg-white font-semibold text-[#111827] shadow-sm' : 'text-white/55 hover:bg-white/5 hover:text-white' }}">

                    <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">

                        <path d="M4 4h12v13l-3-2-3 2-3-2-3 2V4Z" stroke="currentColor" stroke-width="1.5"
                            stroke-linejoin="round" />

                        <path d="M7 8h6M7 11h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />

                    </svg>

                    Cetak Laporan

                </a>

            </nav>


            {{-- User Sidebar --}}
            <div class="border-t border-white/10 px-4 py-4">

                <div class="flex items-center gap-3 px-2 py-2">

                    <div
                        class="flex h-10 w-10 flex-shrink-0
                        items-center justify-center rounded-full
                        bg-gradient-to-br from-amber-400 to-yellow-600
                        text-sm font-semibold text-white shadow-lg">

                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}

                    </div>

                    <div class="min-w-0">

                        <p class="truncate text-sm font-medium text-white">
                            {{ auth()->user()->name ?? 'User' }}
                        </p>

                        <p class="truncate text-xs text-white/40">
                            {{ auth()->user()->email ?? '-' }}
                        </p>

                    </div>

                </div>

            </div>

        </aside>


        {{-- ============================================================
            MOBILE OVERLAY
        ============================================================= --}}
        <div id="overlay"
            class="no-print fixed inset-0 z-30 hidden
            bg-black/40 backdrop-blur-sm md:hidden">
        </div>


        {{-- ============================================================
            MAIN
        ============================================================= --}}
        <div class="min-w-0 flex-1 md:ml-64">


            {{-- ========================================================
                HEADER
            ========================================================= --}}
            <header
                class="no-print sticky top-0 z-20 flex items-center
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


                    {{-- Title --}}
                    <div>

                        <p
                            class="text-xs font-medium uppercase
                            tracking-wider text-slate-400">

                            Internship Panel

                        </p>

                        <h2 class="mt-0.5 font-serif text-xl
                            text-slate-900 md:text-2xl">

                            Laporan Internship

                        </h2>

                        <p class="mt-1 text-xs text-slate-400 md:text-sm">

                            {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}

                        </p>

                    </div>

                </div>


                {{-- Profile --}}
                <div class="relative">

                    <button type="button" id="profile-menu-button"
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-400 to-yellow-600
                        flex items-center justify-center overflow-hidden text-white text-sm font-semibold
                        hover:scale-105 transition shadow-sm">

                        @if (auth()->user()->profil?->foto)
                            <img src="{{ asset('storage/' . auth()->user()->profil->foto) }}" alt="Foto Profil"
                                class="h-full w-full object-cover">
                        @else
                            {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                        @endif

                    </button>


                    {{-- Dropdown --}}
                    <div id="profile-menu"
                        class="absolute right-0 z-50 mt-3 hidden
                        w-60 overflow-hidden rounded-2xl
                        border border-slate-100 bg-white
                        shadow-xl shadow-slate-200/70">

                        <div class="border-b border-slate-100
                            bg-slate-50 px-4 py-4">

                            <p class="text-sm font-semibold text-slate-800">
                                {{ auth()->user()->name ?? 'User' }}
                            </p>

                            <p class="mt-1 truncate text-xs text-slate-400">
                                {{ auth()->user()->email ?? '-' }}
                            </p>

                        </div>


                        <a href="/internship/profil"
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
            <main class="print-area space-y-6 p-4 md:p-8">


                {{-- ====================================================
                    PAGE HEADER
                ===================================================== --}}
                <section class="no-print">

                    <div
                        class="rounded-2xl border border-slate-200
                        bg-white p-5 shadow-sm md:p-6">

                        <div
                            class="flex flex-col gap-5
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

                                        Report

                                    </p>

                                </div>

                                <h1
                                    class="font-serif text-2xl
                                    text-slate-900 md:text-3xl">

                                    Laporan Internship

                                </h1>

                                <p class="mt-1 text-sm text-slate-400">

                                    Ringkasan kehadiran dan hasil penilaian
                                    selama menjalani internship.

                                </p>

                            </div>


                            {{-- Print Button --}}
                            <a href="/internship/laporan/pdf" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center gap-2 rounded-xl
                    bg-[#111827] px-5 py-3 text-sm font-semibold text-white
                    shadow-sm transition hover:bg-slate-800">

                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M6 9V3h12v6M6 18H4a2 2 0 01-2-2v-5a2 2 0 012 2v5h2M6 14h12v7H6v-7Z" />
                                </svg>

                                Cetak Laporan

                            </a>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    PRINT HEADER
                ===================================================== --}}
                <section class="hidden print:block">

                    <div class="border-b-2 border-slate-800 pb-4">

                        <div class="flex items-center gap-4">

                            <div class="h-16 w-16 overflow-hidden">

                                <img src="{{ asset('images/bts.png') }}" alt="Logo"
                                    class="h-full w-full object-contain">

                            </div>

                            <div>

                                <h1
                                    class="text-xl font-bold uppercase
                                    tracking-wide text-slate-900">

                                    Laporan Internship

                                </h1>

                                <p class="mt-1 text-sm text-slate-500">

                                    Laporan Kehadiran dan Penilaian Peserta Internship

                                </p>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    IDENTITAS PESERTA
                ===================================================== --}}
                <section
                    class="print-card avoid-break overflow-hidden
                    rounded-2xl border border-slate-200
                    bg-white shadow-sm">

                    <div class="border-b border-slate-100
                        px-5 py-5 md:px-6">

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center
                                justify-center rounded-xl
                                bg-amber-50">

                                <svg class="h-5 w-5 text-amber-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M15 19a6 6 0 00-12 0M9 10a4 4 0 110-8 4 4 0 010 8Zm7-6v6m3-3h-6" />

                                </svg>

                            </div>

                            <div>

                                <h2 class="text-base font-semibold text-slate-800">
                                    Identitas Peserta
                                </h2>

                                <p class="mt-1 text-xs text-slate-400">
                                    Informasi peserta internship.
                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="grid gap-4 px-5 py-5 md:grid-cols-2 md:px-6">

                        <div>

                            <p
                                class="text-xs font-medium uppercase
                                tracking-wider text-slate-400">

                                Nama Peserta

                            </p>

                            <p class="mt-1 text-sm font-semibold text-slate-800">

                                {{ auth()->user()->name ?? '-' }}

                            </p>

                        </div>


                        <div>

                            <p
                                class="text-xs font-medium uppercase
                                tracking-wider text-slate-400">

                                Email

                            </p>

                            <p class="mt-1 text-sm font-semibold text-slate-800">

                                {{ auth()->user()->email ?? '-' }}

                            </p>

                        </div>


                        <div>

                            <p
                                class="text-xs font-medium uppercase
                                tracking-wider text-slate-400">

                                Periode Laporan

                            </p>

                            <p class="mt-1 text-sm font-semibold text-slate-800">

                                Internship

                            </p>

                        </div>


                        <div>

                            <p
                                class="text-xs font-medium uppercase
                                tracking-wider text-slate-400">

                                Tanggal Cetak

                            </p>

                            <p class="mt-1 text-sm font-semibold text-slate-800">

                                {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}

                            </p>

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
                            Ringkasan kehadiran selama periode internship.
                        </p>

                    </div>


                    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4">


                        {{-- Hadir --}}
                        <div
                            class="print-card rounded-2xl border
                            border-slate-200 bg-white p-5 shadow-sm">

                            <p
                                class="text-xs font-medium uppercase
                                tracking-wider text-slate-400">

                                Hadir

                            </p>

                            <p class="mt-2 text-3xl font-bold text-emerald-600">

                                {{ $jumlahHadir ?? 0 }}

                            </p>

                            <p class="mt-1 text-xs text-slate-400">
                                Hari hadir
                            </p>

                        </div>


                        {{-- Sakit --}}
                        <div
                            class="print-card rounded-2xl border
                            border-slate-200 bg-white p-5 shadow-sm">

                            <p
                                class="text-xs font-medium uppercase
                                tracking-wider text-slate-400">

                                Sakit

                            </p>

                            <p class="mt-2 text-3xl font-bold text-amber-500">

                                {{ $jumlahSakit ?? 0 }}

                            </p>

                            <p class="mt-1 text-xs text-slate-400">
                                Hari sakit
                            </p>

                        </div>


                        {{-- Izin --}}
                        <div
                            class="print-card rounded-2xl border
                            border-slate-200 bg-white p-5 shadow-sm">

                            <p
                                class="text-xs font-medium uppercase
                                tracking-wider text-slate-400">

                                Izin

                            </p>

                            <p class="mt-2 text-3xl font-bold text-blue-500">

                                {{ $jumlahIzin ?? 0 }}

                            </p>

                            <p class="mt-1 text-xs text-slate-400">
                                Hari izin
                            </p>

                        </div>


                        {{-- Alfa --}}
                        <div
                            class="print-card rounded-2xl border
                            border-slate-200 bg-white p-5 shadow-sm">

                            <p
                                class="text-xs font-medium uppercase
                                tracking-wider text-slate-400">

                                Alfa

                            </p>

                            <p class="mt-2 text-3xl font-bold text-red-500">

                                {{ $jumlahAlfa ?? 0 }}

                            </p>

                            <p class="mt-1 text-xs text-slate-400">
                                Hari tanpa keterangan
                            </p>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    DETAIL ABSENSI
                ===================================================== --}}
                <section
                    class="print-card overflow-hidden rounded-2xl
                    border border-slate-200 bg-white shadow-sm">

                    <div class="border-b border-slate-100
                        px-5 py-5 md:px-6">

                        <h2 class="text-base font-semibold text-slate-800">
                            Detail Kehadiran
                        </h2>

                        <p class="mt-1 text-xs text-slate-400">
                            Riwayat kehadiran peserta selama internship.
                        </p>

                    </div>


                    <div class="overflow-x-auto">

                        <table class="w-full text-sm">

                            <thead>

                                <tr class="bg-[#111827]">

                                    <th
                                        class="px-5 py-4 text-left
                                        text-xs font-semibold uppercase
                                        tracking-wider text-white">

                                        No

                                    </th>

                                    <th
                                        class="px-5 py-4 text-left
                                        text-xs font-semibold uppercase
                                        tracking-wider text-white">

                                        Tanggal

                                    </th>

                                    <th
                                        class="px-5 py-4 text-center
                                        text-xs font-semibold uppercase
                                        tracking-wider text-white">

                                        Jam Masuk

                                    </th>

                                    <th
                                        class="px-5 py-4 text-center
                                        text-xs font-semibold uppercase
                                        tracking-wider text-white">

                                        Jam Pulang

                                    </th>

                                    <th
                                        class="px-5 py-4 text-center
                                        text-xs font-semibold uppercase
                                        tracking-wider text-white">

                                        Status

                                    </th>

                                </tr>

                            </thead>


                            <tbody class="divide-y divide-slate-100">

                                @forelse ($absensis ?? [] as $absensi)
                                    <tr class="transition hover:bg-slate-50">

                                        <td class="px-5 py-4 text-slate-500">

                                            {{ $loop->iteration }}

                                        </td>

                                        <td class="px-5 py-4">

                                            <span class="font-medium text-slate-700">

                                                {{ \Carbon\Carbon::parse($absensi->tanggal)->translatedFormat('d F Y') }}

                                            </span>

                                        </td>

                                        <td class="px-5 py-4 text-center text-slate-500">

                                            {{ $absensi->jam_masuk ?? '-' }}

                                        </td>

                                        <td class="px-5 py-4 text-center text-slate-500">

                                            {{ $absensi->jam_pulang ?? '-' }}

                                        </td>

                                        <td class="px-5 py-4 text-center">

                                            @if ($absensi->status === 'hadir')
                                                <span
                                                    class="inline-flex items-center
                                                    rounded-full bg-emerald-50
                                                    px-3 py-1.5 text-xs
                                                    font-semibold text-emerald-600">

                                                    Hadir

                                                </span>
                                            @elseif ($absensi->status === 'sakit')
                                                <span
                                                    class="inline-flex items-center
                                                    rounded-full bg-amber-50
                                                    px-3 py-1.5 text-xs
                                                    font-semibold text-amber-600">

                                                    Sakit

                                                </span>
                                            @elseif ($absensi->status === 'izin')
                                                <span
                                                    class="inline-flex items-center
                                                    rounded-full bg-blue-50
                                                    px-3 py-1.5 text-xs
                                                    font-semibold text-blue-600">

                                                    Izin

                                                </span>
                                            @else
                                                <span
                                                    class="inline-flex items-center
                                                    rounded-full bg-red-50
                                                    px-3 py-1.5 text-xs
                                                    font-semibold text-red-600">

                                                    Alfa

                                                </span>
                                            @endif

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="5" class="px-5 py-12 text-center">

                                            <div
                                                class="flex flex-col
                                                items-center">

                                                <div
                                                    class="mb-4 flex h-14 w-14
                                                    items-center justify-center
                                                    rounded-2xl bg-slate-100">

                                                    <svg class="h-7 w-7 text-slate-300" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">

                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5"
                                                            d="M9 12h6m-6 4h4m-6 5h10a2 2 0 002-2V7.828a2 2 0 00-.586-1.414l-3.828-3.828A2 2 0 0013.172 2H7a2 2 0 00-2 2v15a2 2 0 002 2Z" />

                                                    </svg>

                                                </div>

                                                <p
                                                    class="text-sm font-semibold
                                                    text-slate-600">

                                                    Belum ada data absensi

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
                    PENILAIAN
                ===================================================== --}}
                <section>

                    <div class="mb-4">

                        <h2 class="text-base font-semibold text-slate-800">
                            Hasil Penilaian
                        </h2>

                        <p class="mt-1 text-xs text-slate-400">
                            Penilaian yang diberikan oleh admin internship.
                        </p>

                    </div>


                    <div class="grid gap-4 md:grid-cols-3">


                        {{-- Kedisiplinan --}}
                        <div
                            class="print-card avoid-break rounded-2xl
                            border border-slate-200 bg-white
                            p-5 shadow-sm">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p
                                        class="text-xs font-medium uppercase
                                        tracking-wider text-slate-400">

                                        Kedisiplinan

                                    </p>

                                    <p class="mt-2 text-3xl font-bold text-slate-800">

                                        {{ $nilai->kedisiplinan ?? '-' }}

                                    </p>

                                </div>

                                <div
                                    class="flex h-10 w-10 items-center
                                    justify-center rounded-xl bg-amber-50">

                                    <svg class="h-5 w-5 text-amber-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 3l2.09 4.26L19 8l-3.5 3.41L16.18 16 12 13.77 7.82 16l.68-4.59L5 8l4.91-.74L12 3Z" />

                                    </svg>

                                </div>

                            </div>

                        </div>


                        {{-- Keterampilan --}}
                        <div
                            class="print-card avoid-break rounded-2xl
                            border border-slate-200 bg-white
                            p-5 shadow-sm">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p
                                        class="text-xs font-medium uppercase
                                        tracking-wider text-slate-400">

                                        Keterampilan

                                    </p>

                                    <p class="mt-2 text-3xl font-bold text-slate-800">

                                        {{ $nilai->keterampilan ?? '-' }}

                                    </p>

                                </div>

                                <div
                                    class="flex h-10 w-10 items-center
                                    justify-center rounded-xl bg-blue-50">

                                    <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M9 6h6M9 10h6M9 14h4M5 3h10l4 4v14H5V3Z" />

                                    </svg>

                                </div>

                            </div>

                        </div>


                        {{-- Skill --}}
                        <div
                            class="print-card avoid-break rounded-2xl
                            border border-slate-200 bg-white
                            p-5 shadow-sm">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p
                                        class="text-xs font-medium uppercase
                                        tracking-wider text-slate-400">

                                        Skill

                                    </p>

                                    <p class="mt-2 text-3xl font-bold text-slate-800">

                                        {{ $nilai->skill ?? '-' }}

                                    </p>

                                </div>

                                <div
                                    class="flex h-10 w-10 items-center
                                    justify-center rounded-xl bg-emerald-50">

                                    <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 3l2.09 4.26L19 8l-3.5 3.41L16.18 16 12 13.77 7.82 16l.68-4.59L5 8l-4.91-.74L12 3Z" />

                                    </svg>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    CATATAN
                ===================================================== --}}
                <section
                    class="print-card avoid-break rounded-2xl
                    border border-slate-200 bg-white
                    shadow-sm">

                    <div class="px-5 py-5 md:px-6">

                        <h2 class="text-base font-semibold text-slate-800">
                            Catatan
                        </h2>

                        <p class="mt-2 text-sm leading-6 text-slate-500">

                            Laporan ini merupakan rekap kehadiran dan hasil
                            penilaian peserta selama menjalani program
                            internship. Data pada laporan diambil dari sistem
                            absensi dan penilaian internship.

                        </p>

                    </div>

                </section>


                {{-- ====================================================
                    FOOTER
                ===================================================== --}}
                <div
                    class="no-print flex flex-col gap-2
                    border-t border-slate-200 pt-5
                    sm:flex-row sm:items-center
                    sm:justify-between">

                    <p class="text-xs text-slate-400">
                        Laporan internship dibuat melalui sistem.
                    </p>

                    <div class="flex items-center gap-2 text-xs text-slate-400">

                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                        Data tersimpan

                    </div>

                </div>

            </main>

        </div>

    </div>


    {{-- ============================================================
        PROFILE DROPDOWN
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
        MOBILE SIDEBAR
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
