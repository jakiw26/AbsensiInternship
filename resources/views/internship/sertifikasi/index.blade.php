<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sertifikat Internship Panel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="min-h-screen bg-slate-50 font-sans text-slate-800">

    <div class="flex min-h-screen">


        {{-- ============================================================
            SIDEBAR
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
                        Internship Panel
                    </p>
                </div>
            </div>

            {{-- Navigation --}}
            <nav class="flex-1 px-4 py-6 space-y-1.5">

                {{-- Dashboard --}}
                <a href="/internship/dashboard"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('internship/dashboard')
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

                {{-- Absensi --}}
                <a href="/internship/absensi"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('internship/absensi*')
                        ? 'bg-white text-[#111827] font-semibold shadow-sm'
                        : 'text-white/55 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">
                        <circle cx="10" cy="10" r="7" stroke="currentColor" stroke-width="1.5" />
                        <path d="M10 6v4l2.5 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    Absensi
                </a>

                {{-- Nilai --}}
                <a href="/internship/nilai"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('internship/nilai*')
                        ? 'bg-white text-[#111827] font-semibold shadow-sm'
                        : 'text-white/55 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">
                        <path d="M6 3h8l2 2v12H4V5l2-2Z" stroke="currentColor" stroke-width="1.5"
                            stroke-linejoin="round" />

                        <path d="M7 8h6M7 11h6M7 14h4" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" />
                    </svg>
                    Nilai Saya
                </a>

                {{-- Laporan --}}
                <a href="/internship/laporan"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('internship/laporan*')
                        ? 'bg-white text-[#111827] font-semibold shadow-sm'
                        : 'text-white/55 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">
                        <path d="M4 4h12v13l-3-2-3 2-3-2-3 2V4Z" stroke="currentColor" stroke-width="1.5"
                            stroke-linejoin="round" />
                        <path d="M7 8h6M7 11h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    Cetak Laporan
                </a>

                {{-- Sertifikat --}}
                <a href="/internship/sertifikasi"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('internship/sertifikasi*')
                        ? 'bg-white text-[#111827] font-semibold shadow-sm'
                        : 'text-white/55 hover:bg-white/5 hover:text-white' }}">

                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M12 3l2.1 2.1 3-.2.8 2.9 2.6 1.5-1.5 2.6.8 2.9-3 .8-1.8 2.4-3-1.1-3 1.1-1.8-2.4-3-.8.8-2.9-1.5-2.6 2.6-1.5.8-2.9 3 .2L12 3Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />

                        <path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                    Sertifikasi
                </a>
            </nav>

            {{-- User Sidebar --}}
            <div class="px-4 py-4 border-t border-white/10">
                <div class="flex items-center gap-3 px-2 py-2">
                    <div
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-400 to-yellow-600
                        flex items-center justify-center text-white text-sm font-semibold flex-shrink-0 shadow-lg">
                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                    </div>
                    <div class="min-w-0">
                        <p class="text-sm font-medium text-white truncate">
                            {{ auth()->user()->name ?? 'User' }}
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

                            Sertifikat Internship

                        </h2>

                        <p class="mt-1 text-xs text-slate-400 md:text-sm">

                            {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}

                        </p>

                    </div>

                </div>


                {{-- Profile --}}
                <div class="relative">

                    <button type="button" id="profile-menu-button"
                        class="flex h-10 w-10 items-center
                        justify-center overflow-hidden rounded-full
                        bg-gradient-to-br from-amber-400 to-yellow-600
                        text-sm font-semibold text-white
                        shadow-sm transition hover:scale-105">

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
            <main class="space-y-6 p-4 md:p-8">


                {{-- ====================================================
                    PAGE HEADER
                ===================================================== --}}
                <section>

                    <div
                        class="relative overflow-hidden rounded-2xl
                        border border-slate-200 bg-white
                        p-5 shadow-sm md:p-7">

                        {{-- Decorative --}}
                        <div
                            class="absolute -right-12 -top-12
                            h-36 w-36 rounded-full
                            bg-amber-100/60 blur-2xl">
                        </div>

                        <div
                            class="absolute -bottom-16 left-1/3
                            h-32 w-32 rounded-full
                            bg-red-100/40 blur-2xl">
                        </div>


                        <div
                            class="relative flex flex-col gap-5
                            md:flex-row md:items-center
                            md:justify-between">

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

                                        Certificate

                                    </p>

                                </div>

                                <h1
                                    class="font-serif text-2xl
                                    text-slate-900 md:text-3xl">

                                    Sertifikat Internship

                                </h1>

                                <p
                                    class="mt-2 max-w-2xl text-sm
                                    leading-6 text-slate-400">

                                    Sertifikat sebagai bukti telah
                                    menyelesaikan program internship
                                    di PT Intersolusi Teknologi Asia.

                                </p>

                            </div>


                            {{-- Icon --}}
                            <div
                                class="hidden h-16 w-16 flex-shrink-0
                                items-center justify-center rounded-2xl
                                bg-gradient-to-br from-red-50 to-amber-50
                                ring-1 ring-amber-100 md:flex">

                                <svg class="h-8 w-8 text-amber-500" viewBox="0 0 24 24" fill="none">

                                    <path
                                        d="M12 3l2.1 2.1 3-.2.8 2.9 2.6 1.5-1.5 2.6.8 2.9-3 .8-1.8 2.4-3-1.1-3 1.1-1.8-2.4-3-.8.8-2.9-1.5-2.6 2.6-1.5.8-2.9 3 .2L12 3Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />

                                    <path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />

                                </svg>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    SERTIFIKAT
                ===================================================== --}}
                @if ($sertifikasi)
                    <section>

                        <div
                            class="overflow-hidden rounded-2xl
                            border border-slate-200 bg-white
                            shadow-sm">


                            {{-- Card Header --}}
                            <div
                                class="flex flex-col gap-4
                                border-b border-slate-100
                                px-5 py-5 md:flex-row
                                md:items-center md:justify-between
                                md:px-6">

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-11 w-11
                                        items-center justify-center
                                        rounded-xl bg-emerald-50">

                                        <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M9 12l2 2 4-4m5 2a8 8 0 11-16 0 8 8 0 0116 0Z" />

                                        </svg>

                                    </div>

                                    <div>

                                        <h2
                                            class="text-base font-semibold
                                            text-slate-800">

                                            Sertifikat Diterbitkan

                                        </h2>

                                        <p class="mt-1 text-xs text-slate-400">

                                            Sertifikat kamu telah tersedia.

                                        </p>

                                    </div>

                                </div>


                                <span
                                    class="inline-flex w-fit items-center
                                    gap-1.5 rounded-full
                                    bg-emerald-50 px-3 py-1.5
                                    text-xs font-semibold
                                    text-emerald-600">

                                    <span
                                        class="h-1.5 w-1.5 rounded-full
                                        bg-emerald-500">
                                    </span>

                                    Tersedia

                                </span>

                            </div>


                            {{-- Certificate Preview --}}
                            <div class="p-5 md:p-8">

                                <div
                                    class="relative overflow-hidden
                                    rounded-2xl border border-slate-200
                                    bg-gradient-to-br
                                    from-[#fffdf7] via-white to-[#fff8e7]
                                    p-6 shadow-sm md:p-10">

                                    {{-- Decorative --}}
                                    <div
                                        class="absolute -right-16 -top-16
                                        h-40 w-40 rounded-full
                                        border-[18px] border-amber-100/60">
                                    </div>

                                    <div
                                        class="absolute -bottom-20 -left-16
                                        h-44 w-44 rounded-full
                                        border-[18px] border-red-100/50">
                                    </div>


                                    <div class="relative text-center">

                                        {{-- Logo --}}
                                        <div
                                            class="mx-auto flex h-16
                                            w-28 items-center
                                            justify-center">

                                            <img src="{{ asset('images/bts.png') }}" alt="BTS.id"
                                                class="max-h-16 max-w-full
                                                object-contain">

                                        </div>


                                        {{-- Small line --}}
                                        <div
                                            class="mx-auto mt-4 h-1 w-20
                                            rounded-full bg-[#9e2734]">
                                        </div>


                                        {{-- Title --}}
                                        <p
                                            class="mt-5 text-xs font-semibold
                                            uppercase tracking-[0.3em]
                                            text-slate-400">

                                            Certificate of Completion

                                        </p>


                                        {{-- Name --}}
                                        <h3
                                            class="mt-4 font-serif text-2xl
                                            font-bold text-[#9e2734]
                                            md:text-4xl">

                                            {{ $sertifikasi->nama }}

                                        </h3>


                                        {{-- Description --}}
                                        <p
                                            class="mx-auto mt-4 max-w-2xl
                                            text-sm leading-6 text-slate-500">

                                            Telah menyelesaikan program
                                            internship di
                                            <span class="font-semibold text-slate-700">
                                                PT Intersolusi Teknologi Asia
                                            </span>

                                        </p>


                                        {{-- Period --}}
                                        <div
                                            class="mx-auto mt-5 inline-flex
                                            flex-col items-center rounded-xl
                                            border border-amber-100
                                            bg-white/80 px-5 py-3
                                            shadow-sm">

                                            <span
                                                class="text-[10px] font-semibold
                                                uppercase tracking-widest
                                                text-slate-400">

                                                Periode Internship

                                            </span>

                                            <span
                                                class="mt-1 text-sm font-semibold
                                                text-slate-700">

                                                {{ \Carbon\Carbon::parse($sertifikasi->tanggal_mulai)->translatedFormat('d F Y') }}

                                                <span class="mx-1 text-amber-500">
                                                    —
                                                </span>

                                                {{ \Carbon\Carbon::parse($sertifikasi->tanggal_selesai)->translatedFormat('d F Y') }}

                                            </span>

                                        </div>


                                        {{-- Seal --}}
                                        <div
                                            class="mx-auto mt-7 flex h-14
                                            w-14 items-center justify-center
                                            rounded-full border-2
                                            border-amber-300 bg-amber-50">

                                            <svg class="h-7 w-7 text-amber-500" viewBox="0 0 24 24" fill="none">

                                                <path
                                                    d="M12 3l2.1 2.1 3-.2.8 2.9 2.6 1.5-1.5 2.6.8 2.9-3 .8-1.8 2.4-3-1.1-3 1.1-1.8-2.4-3-.8.8-2.9-1.5-2.6 2.6-1.5.8-2.9 3 .2L12 3Z"
                                                    stroke="currentColor" stroke-width="1.4"
                                                    stroke-linejoin="round" />

                                                <path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />

                                            </svg>

                                        </div>

                                    </div>

                                </div>


                                {{-- Action --}}
                                <div
                                    class="mt-5 flex flex-col gap-3
                                    sm:flex-row sm:justify-end">

                                    <a href="/internship/sertifikasi/pdf/{{ $sertifikasi->id }}" target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center
                                        justify-center gap-2 rounded-xl
                                        bg-[#111827] px-5 py-3
                                        text-sm font-semibold text-white
                                        shadow-sm transition
                                        hover:bg-slate-800">

                                        <svg class="h-4 w-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                                d="M6 9V3h12v6M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5h-2M6 14h12v7H6v-7Z" />

                                        </svg>

                                        Lihat & Cetak Sertifikat

                                    </a>

                                </div>

                            </div>

                        </div>

                    </section>
                @else
                    {{-- ====================================================
                        EMPTY STATE
                    ===================================================== --}}
                    <section>

                        <div
                            class="overflow-hidden rounded-2xl
                            border border-slate-200 bg-white
                            shadow-sm">

                            <div class="px-6 py-14 text-center md:py-20">

                                <div
                                    class="mx-auto flex h-20 w-20
                                    items-center justify-center
                                    rounded-3xl bg-amber-50">

                                    <svg class="h-10 w-10 text-amber-400" viewBox="0 0 24 24" fill="none">

                                        <path
                                            d="M12 3l2.1 2.1 3-.2.8 2.9 2.6 1.5-1.5 2.6.8 2.9-3 .8-1.8 2.4-3-1.1-3 1.1-1.8-2.4-3-.8.8-2.9-1.5-2.6 2.6-1.5.8-2.9 3 .2L12 3Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />

                                        <path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />

                                    </svg>

                                </div>


                                <h2
                                    class="mt-5 text-lg font-semibold
                                    text-slate-700">

                                    Sertifikat Belum Tersedia

                                </h2>


                                <p
                                    class="mx-auto mt-2 max-w-md
                                    text-sm leading-6 text-slate-400">

                                    Sertifikat internship kamu belum
                                    diterbitkan oleh administrator.
                                    Silakan menunggu sampai proses
                                    penerbitan sertifikat selesai.

                                </p>

                            </div>

                        </div>

                    </section>
                @endif


                {{-- ====================================================
                    INFORMATION
                ===================================================== --}}
                <section>

                    <div
                        class="rounded-2xl border border-slate-200
                        bg-white p-5 shadow-sm md:p-6">

                        <div class="flex items-start gap-4">

                            <div
                                class="flex h-10 w-10 flex-shrink-0
                                items-center justify-center rounded-xl
                                bg-blue-50">

                                <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 8h.01M11 12h1v4h1m-1-13a9 9 0 100 18 9 9 0 000-18Z" />

                                </svg>

                            </div>

                            <div>

                                <h3 class="text-sm font-semibold
                                    text-slate-800">

                                    Informasi Sertifikat

                                </h3>

                                <p class="mt-1 text-sm leading-6
                                    text-slate-500">

                                    Sertifikat merupakan bukti bahwa kamu
                                    telah menyelesaikan program internship.
                                    Kamu dapat membuka dan mencetak sertifikat
                                    setelah diterbitkan oleh administrator.

                                </p>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- Footer --}}
                <div
                    class="flex flex-col gap-2 border-t
                    border-slate-200 pt-5
                    sm:flex-row sm:items-center
                    sm:justify-between">

                    <p class="text-xs text-slate-400">

                        Sertifikat internship dibuat melalui sistem.

                    </p>

                    <div class="flex items-center gap-2
                        text-xs text-slate-400">

                        <span class="h-2 w-2 rounded-full
                            bg-emerald-500">
                        </span>

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

            btnToggle.addEventListener(
                'click',
                openSidebar
            );

        }


        if (overlay) {

            overlay.addEventListener(
                'click',
                closeSidebar
            );

        }
    </script>

</body>

</html>
