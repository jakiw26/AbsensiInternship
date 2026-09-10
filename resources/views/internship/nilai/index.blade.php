<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nilai Saya Internship Panel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="min-h-screen bg-slate-50 font-sans text-slate-800">

    <div class="flex min-h-screen">
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-40 flex w-64
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
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition
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

                        <path d="M4 4h12v13l-3-2-3 2-3-2-3 2V4Z" stroke="currentColor"
                            stroke-width="1.5"stroke-linejoin="round" />
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
        <div id="overlay" class="fixed inset-0 z-30 hidden bg-black/40
            backdrop-blur-sm md:hidden">
        </div>

        {{-- ============================================================
            MAIN
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

                    {{-- Mobile Sidebar Button --}}
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

                            Internship Panel

                        </p>

                        <h2 class="mt-0.5 font-serif text-xl
                            text-slate-900 md:text-2xl">

                            Nilai Saya

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


                    {{-- Profile Dropdown --}}
                    <div id="profile-menu"
                        class="absolute right-0 z-50 mt-3 hidden
                        w-60 overflow-hidden rounded-2xl
                        border border-slate-100 bg-white
                        shadow-xl shadow-slate-200/70">

                        {{-- User Information --}}
                        <div class="border-b border-slate-100
                            bg-slate-50 px-4 py-4">

                            <p class="text-sm font-semibold text-slate-800">
                                {{ auth()->user()->name ?? 'User' }}
                            </p>

                            <p class="mt-1 truncate text-xs text-slate-400">
                                {{ auth()->user()->email ?? '-' }}
                            </p>
                        </div>


                        {{-- Profile --}}
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

                            <span>
                                Profil Saya
                            </span>

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

                                <span>
                                    Logout
                                </span>

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
                    PAGE HEADER
                ===================================================== --}}
                <section>

                    <div
                        class="rounded-2xl border border-slate-200
                        bg-white p-5 shadow-sm md:p-6">

                        <div
                            class="flex flex-col gap-5
                            md:flex-row md:items-center
                            md:justify-between">

                            {{-- Title --}}
                            <div>

                                <div class="mb-2 flex items-center gap-2">

                                    <span
                                        class="h-2 w-2 rounded-full
                                        bg-amber-400">
                                    </span>

                                    <p
                                        class="text-xs font-medium
                                        uppercase tracking-wider
                                        text-slate-400">

                                        Evaluation

                                    </p>

                                </div>


                                <h1
                                    class="font-serif text-2xl
                                    text-slate-900 md:text-3xl">

                                    Nilai Saya

                                </h1>


                                <p class="mt-1 text-sm text-slate-400">

                                    Lihat hasil penilaian kamu selama menjalani internship.

                                </p>

                            </div>


                            {{-- Status --}}
                            <div
                                class="inline-flex w-fit items-center
                                gap-2 rounded-full
                                bg-emerald-50 px-3 py-1.5
                                text-xs font-medium text-emerald-600">

                                <span
                                    class="h-1.5 w-1.5 rounded-full
                                    bg-emerald-500">
                                </span>

                                Nilai Tersimpan

                            </div>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    SCORE CARDS
                ===================================================== --}}
                <section>

                    <div class="grid gap-4 md:grid-cols-3">


                        {{-- Kedisiplinan --}}
                        <div
                            class="rounded-2xl border border-slate-200
                            bg-white p-5 shadow-sm
                            transition duration-200
                            hover:-translate-y-0.5 hover:shadow-md">

                            <div class="flex items-start justify-between">

                                <div>

                                    <p
                                        class="text-xs font-medium
                                        uppercase tracking-wider
                                        text-slate-400">

                                        Kedisiplinan

                                    </p>

                                    <p
                                        class="mt-2 text-3xl font-bold
                                        text-slate-800">

                                        {{ $nilai->kedisiplinan ?? '-' }}

                                    </p>

                                </div>


                                <div
                                    class="flex h-10 w-10 items-center
                                    justify-center rounded-xl
                                    bg-amber-50">

                                    <svg class="h-5 w-5 text-amber-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 3l2.09 4.26L19 8l-3.5 3.41L16.18 16 12 13.77 7.82 16l.68-4.59L5 8l4.91-.74L12 3Z" />

                                    </svg>

                                </div>

                            </div>


                            <div
                                class="mt-4 h-1.5 overflow-hidden
                                rounded-full bg-slate-100">

                                <div class="h-full rounded-full bg-amber-400"
                                    style="width: {{ min((float) ($nilai->kedisiplinan ?? 0), 100) }}%">
                                </div>

                            </div>

                        </div>


                        {{-- Keterampilan --}}
                        <div
                            class="rounded-2xl border border-slate-200
                            bg-white p-5 shadow-sm
                            transition duration-200
                            hover:-translate-y-0.5 hover:shadow-md">

                            <div class="flex items-start justify-between">

                                <div>

                                    <p
                                        class="text-xs font-medium
                                        uppercase tracking-wider
                                        text-slate-400">

                                        Keterampilan

                                    </p>

                                    <p
                                        class="mt-2 text-3xl font-bold
                                        text-slate-800">

                                        {{ $nilai->keterampilan ?? '-' }}

                                    </p>

                                </div>


                                <div
                                    class="flex h-10 w-10 items-center
                                    justify-center rounded-xl
                                    bg-blue-50">

                                    <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M9 6h6M9 10h6M9 14h4M5 3h10l4 4v14H5V3Z" />

                                    </svg>

                                </div>

                            </div>


                            <div
                                class="mt-4 h-1.5 overflow-hidden
                                rounded-full bg-slate-100">

                                <div class="h-full rounded-full bg-blue-500"
                                    style="width: {{ min((float) ($nilai->keterampilan ?? 0), 100) }}%">
                                </div>

                            </div>

                        </div>


                        {{-- Skill --}}
                        <div
                            class="rounded-2xl border border-slate-200
                            bg-white p-5 shadow-sm
                            transition duration-200
                            hover:-translate-y-0.5 hover:shadow-md">

                            <div class="flex items-start justify-between">

                                <div>

                                    <p
                                        class="text-xs font-medium
                                        uppercase tracking-wider
                                        text-slate-400">

                                        Skill

                                    </p>

                                    <p
                                        class="mt-2 text-3xl font-bold
                                        text-slate-800">

                                        {{ $nilai->skill ?? '-' }}

                                    </p>

                                </div>


                                <div
                                    class="flex h-10 w-10 items-center
                                    justify-center rounded-xl
                                    bg-emerald-50">

                                    <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 3l2.09 4.26L19 8l-3.5 3.41L16.18 16 12 13.77 7.82 16l.68-4.59L5 8l4.91-.74L12 3Z" />

                                    </svg>

                                </div>

                            </div>


                            <div
                                class="mt-4 h-1.5 overflow-hidden
                                rounded-full bg-slate-100">

                                <div class="h-full rounded-full bg-emerald-500"
                                    style="width: {{ min((float) ($nilai->skill ?? 0), 100) }}%">
                                </div>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    DETAIL NILAI
                ===================================================== --}}
                <section
                    class="overflow-hidden rounded-2xl
                    border border-slate-200
                    bg-white shadow-sm">

                    {{-- Card Header --}}
                    <div
                        class="flex flex-col gap-3
                        border-b border-slate-100
                        px-5 py-5
                        md:flex-row md:items-center
                        md:justify-between md:px-6">

                        <div>

                            <h2 class="text-base font-semibold text-slate-800">
                                Detail Penilaian
                            </h2>

                            <p class="mt-1 text-xs text-slate-400">
                                Rincian nilai yang diberikan oleh admin.
                            </p>

                        </div>


                        <div
                            class="inline-flex w-fit items-center
                            gap-2 rounded-full
                            bg-slate-100 px-3 py-1.5
                            text-xs font-medium text-slate-500">

                            <span class="h-1.5 w-1.5 rounded-full
                                bg-slate-400">
                            </span>

                            Penilaian Internship

                        </div>

                    </div>


                    {{-- Table --}}
                    <div class="overflow-x-auto">

                        <table class="w-full text-sm">

                            <thead>

                                <tr class="bg-[#111827]">

                                    <th
                                        class="rounded-tl-xl px-5 py-4
                                        text-left text-xs font-semibold
                                        uppercase tracking-wider
                                        text-white">

                                        Komponen Penilaian

                                    </th>

                                    <th
                                        class="px-5 py-4
                                        text-center text-xs font-semibold
                                        uppercase tracking-wider
                                        text-white">

                                        Nilai

                                    </th>

                                    <th
                                        class="rounded-tr-xl px-5 py-4
                                        text-left text-xs font-semibold
                                        uppercase tracking-wider
                                        text-white">

                                        Keterangan

                                    </th>

                                </tr>

                            </thead>


                            <tbody class="divide-y divide-slate-100">


                                {{-- Kedisiplinan --}}
                                <tr class="transition hover:bg-slate-50">

                                    <td class="px-5 py-4">

                                        <div class="flex items-center gap-3">

                                            <div
                                                class="flex h-9 w-9
                                                items-center justify-center
                                                rounded-lg bg-amber-50">

                                                <svg class="h-4 w-4 text-amber-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">

                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M12 3l2.09 4.26L19 8l-3.5 3.41L16.18 16 12 13.77 7.82 16l.68-4.59L5 8l4.91-.74L12 3Z" />

                                                </svg>

                                            </div>

                                            <span class="font-semibold text-slate-700">
                                                Kedisiplinan
                                            </span>

                                        </div>

                                    </td>


                                    <td class="px-5 py-4 text-center">

                                        <span
                                            class="inline-flex min-w-16
                                            items-center justify-center
                                            rounded-lg bg-amber-50
                                            px-3 py-2
                                            text-sm font-bold
                                            text-amber-700">

                                            {{ $nilai->kedisiplinan ?? '-' }}

                                        </span>

                                    </td>


                                    <td class="px-5 py-4">

                                        @if ($nilai && $nilai->kedisiplinan !== null)
                                            <span class="text-xs text-slate-500">
                                                Nilai kedisiplinan selama internship.
                                            </span>
                                        @else
                                            <span class="text-xs text-slate-300">
                                                Belum dinilai
                                            </span>
                                        @endif

                                    </td>

                                </tr>


                                {{-- Keterampilan --}}
                                <tr class="transition hover:bg-slate-50">

                                    <td class="px-5 py-4">

                                        <div class="flex items-center gap-3">

                                            <div
                                                class="flex h-9 w-9
                                                items-center justify-center
                                                rounded-lg bg-blue-50">

                                                <svg class="h-4 w-4 text-blue-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">

                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M9 6h6M9 10h6M9 14h4M5 3h10l4 4v14H5V3Z" />

                                                </svg>

                                            </div>

                                            <span class="font-semibold text-slate-700">
                                                Keterampilan
                                            </span>

                                        </div>

                                    </td>


                                    <td class="px-5 py-4 text-center">

                                        <span
                                            class="inline-flex min-w-16
                                            items-center justify-center
                                            rounded-lg bg-blue-50
                                            px-3 py-2
                                            text-sm font-bold
                                            text-blue-700">

                                            {{ $nilai->keterampilan ?? '-' }}

                                        </span>

                                    </td>


                                    <td class="px-5 py-4">

                                        @if ($nilai && $nilai->keterampilan !== null)
                                            <span class="text-xs text-slate-500">
                                                Nilai keterampilan selama internship.
                                            </span>
                                        @else
                                            <span class="text-xs text-slate-300">
                                                Belum dinilai
                                            </span>
                                        @endif

                                    </td>

                                </tr>


                                {{-- Skill --}}
                                <tr class="transition hover:bg-slate-50">

                                    <td class="px-5 py-4">

                                        <div class="flex items-center gap-3">

                                            <div
                                                class="flex h-9 w-9
                                                items-center justify-center
                                                rounded-lg bg-emerald-50">

                                                <svg class="h-4 w-4 text-emerald-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">

                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M12 3l2.09 4.26L19 8l-3.5 3.41L16.18 16 12 13.77 7.82 16l.68-4.59L5 8l4.91-.74L12 3Z" />

                                                </svg>

                                            </div>

                                            <span class="font-semibold text-slate-700">
                                                Skill
                                            </span>

                                        </div>

                                    </td>


                                    <td class="px-5 py-4 text-center">

                                        <span
                                            class="inline-flex min-w-16
                                            items-center justify-center
                                            rounded-lg bg-emerald-50
                                            px-3 py-2
                                            text-sm font-bold
                                            text-emerald-700">

                                            {{ $nilai->skill ?? '-' }}

                                        </span>

                                    </td>


                                    <td class="px-5 py-4">

                                        @if ($nilai && $nilai->skill !== null)
                                            <span class="text-xs text-slate-500">
                                                Nilai kemampuan dan penguasaan skill.
                                            </span>
                                        @else
                                            <span class="text-xs text-slate-300">
                                                Belum dinilai
                                            </span>
                                        @endif

                                    </td>

                                </tr>


                                {{-- Empty --}}
                                @if (!$nilai)
                                    <tr>

                                        <td colspan="3" class="px-5 py-12 text-center">

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

                                                    Belum ada penilaian

                                                </p>


                                                <p
                                                    class="mt-1 text-xs
                                                    text-slate-400">

                                                    Nilai kamu akan muncul setelah admin memberikan penilaian.

                                                </p>

                                            </div>

                                        </td>

                                    </tr>
                                @endif

                            </tbody>

                        </table>

                    </div>


                    {{-- Footer --}}
                    <div
                        class="flex flex-col gap-2
                        border-t border-slate-100
                        bg-slate-50 px-5 py-4
                        sm:flex-row sm:items-center
                        sm:justify-between md:px-6">

                        <p class="text-xs text-slate-400">
                            Penilaian diberikan oleh admin internship.
                        </p>

                        <div class="flex items-center gap-2
                            text-xs text-slate-400">

                            <span class="h-2 w-2 rounded-full
                                bg-emerald-500">
                            </span>

                            Data penilaian tersimpan

                        </div>

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

        btnToggle.addEventListener('click', openSidebar);
        overlay.addEventListener('click', closeSidebar);
    </script>

</body>

</html>
