<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya Internship Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50 font-sans text-slate-800">

    <div class="flex min-h-screen">

        {{-- ============================================================
        SIDEBAR
    ============================================================= --}}
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-40 flex w-64
        -translate-x-full transform flex-col
        bg-slate-900 text-white shadow-2xl
        transition-transform duration-200
        md:translate-x-0">

            {{-- Logo --}}
            <div class="flex items-center gap-3 border-b border-white/10 px-6 py-5">

                <div class="h-10 w-10 flex-shrink-0 overflow-hidden rounded-xl bg-white shadow-sm">
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
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition
                {{ request()->is('internship/dashboard')
                    ? 'bg-white font-semibold text-slate-900 shadow-sm'
                    : 'text-white/55 hover:bg-white/5 hover:text-white' }}">

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
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition
                {{ request()->is('internship/absensi*')
                    ? 'bg-white font-semibold text-slate-900 shadow-sm'
                    : 'text-white/55 hover:bg-white/5 hover:text-white' }}">

                    <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">

                        <circle cx="10" cy="10" r="7" stroke="currentColor" stroke-width="1.5" />

                        <path d="M10 6v4l2.5 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />

                    </svg>

                    Absensi

                </a>


                {{-- Nilai --}}
                <a href="/internship/nilai"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition
                {{ request()->is('internship/nilai*')
                    ? 'bg-white font-semibold text-slate-900 shadow-sm'
                    : 'text-white/55 hover:bg-white/5 hover:text-white' }}">

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
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition
                {{ request()->is('internship/laporan*')
                    ? 'bg-white font-semibold text-slate-900 shadow-sm'
                    : 'text-white/55 hover:bg-white/5 hover:text-white' }}">

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
                    items-center justify-center overflow-hidden
                    rounded-full
                    bg-slate-700
                    text-sm font-semibold text-white shadow-sm">

                        @if (auth()->user()->profil?->foto)
                            <img src="{{ asset('storage/' . auth()->user()->profil->foto) }}" alt="Foto Profil"
                                class="h-full w-full object-cover">
                        @else
                            {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                        @endif

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
        <div id="overlay" class="fixed inset-0 z-30 hidden bg-black/40 backdrop-blur-sm md:hidden">
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
            bg-white/95 px-4 py-3 backdrop-blur
            md:px-8">

                <div class="flex items-center gap-4">

                    {{-- Mobile Sidebar --}}
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

                        <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                            Internship Panel
                        </p>

                        <h2 class="font-serif text-xl text-slate-900 md:text-2xl">
                            Profil Saya
                        </h2>

                        <p class="mt-0.5 text-xs text-slate-400 md:text-sm">
                            {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
                        </p>

                    </div>

                </div>

                {{-- ============================================================
    SUCCESS ALERT (toast, muncul kalau ada session('success'))
============================================================= --}}
                @if (session('success'))
                    <div id="success-alert"
                        class="fixed right-4 top-4 z-[60] w-80 overflow-hidden
        rounded-2xl border border-slate-200 bg-white
        shadow-xl shadow-slate-200/70
        transition-all duration-500">

                        <div class="flex items-start gap-3 px-4 py-4">

                            {{-- Icon --}}
                            <div
                                class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-lg bg-emerald-50">
                                <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            {{-- Message --}}
                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-semibold text-slate-800">Berhasil</p>
                                <p class="mt-0.5 text-xs text-slate-500">{{ session('success') }}</p>
                            </div>

                            {{-- Close Button --}}
                            <button type="button" onclick="closeAlert()"
                                class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-md text-slate-400 transition hover:bg-slate-100 hover:text-slate-600">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 6l12 12M6 18L18 6" />
                                </svg>
                            </button>

                        </div>

                        {{-- Progress Bar --}}
                        <div class="h-1 w-full bg-slate-100">
                            <div id="progress-bar"
                                class="h-full bg-emerald-500 transition-all duration-[4000ms] ease-linear"
                                style="width: 100%;">
                            </div>
                        </div>

                    </div>
                @endif


                {{-- Profile Dropdown --}}
                <div class="relative">

                    <button type="button" id="profile-menu-button"
                        class="flex h-10 w-10 items-center
                    justify-center overflow-hidden rounded-full
                    bg-slate-700
                    text-sm font-semibold text-white shadow-sm
                    transition hover:scale-105">

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

                        <div class="border-b border-slate-100 bg-slate-50 px-4 py-4">

                            <p class="text-sm font-semibold text-slate-800">
                                {{ auth()->user()->name ?? 'User' }}
                            </p>

                            <p class="mt-1 truncate text-xs text-slate-400">
                                {{ auth()->user()->email ?? '-' }}
                            </p>

                        </div>


                        {{-- Profile --}}
                        <a href="/internship/profil"
                            class="flex items-center gap-3
                        bg-slate-50 px-4 py-3
                        text-sm font-medium text-slate-700">

                            <div
                                class="flex h-8 w-8 items-center
                            justify-center rounded-lg bg-white">

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
            <main class="space-y-5 p-4 md:p-8">

                {{-- ====================================================
                PAGE HEADER
            ===================================================== --}}
                <section>

                    <div class="rounded-2xl border border-slate-200
    bg-white px-5 py-5 shadow-sm md:px-6 md:py-5">

                        <div
                            class="flex flex-col gap-4
        sm:flex-row sm:items-center
        sm:justify-between">

                            <div>

                                <div class="mb-1.5 flex items-center gap-2">

                                    <span class="h-2 w-2 rounded-full bg-slate-300"></span>

                                    <p
                                        class="text-xs font-medium uppercase
                    tracking-wider text-slate-400">

                                        Profile

                                    </p>

                                </div>

                                <h1 class="font-serif text-2xl text-slate-900 md:text-3xl">

                                    Profil Saya

                                </h1>

                                <p class="mt-1 text-sm text-slate-400">

                                    Kelola dan lihat informasi pribadi kamu.

                                </p>

                            </div>


                            {{-- Edit Button (trigger modal) --}}
                            <button type="button" id="btn-open-edit-profil"
                                class="inline-flex w-fit items-center
            justify-center gap-2 rounded-xl
            bg-[#111827] px-5 py-2.5
            text-sm font-semibold text-white
            shadow-sm transition hover:bg-slate-800">

                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M16.862 3.487a2.1 2.1 0 013.111 2.828L8.5 17.788 4 19l1.212-4.5L16.862 3.487Z" />

                                </svg>

                                Edit Profil

                            </button>

                        </div>

                    </div>

                </section>


                {{-- ============================================================
    MODAL EDIT PROFIL
============================================================= --}}
                <div id="modal-edit-profil" class="fixed inset-0 z-50 hidden items-center justify-center p-4">

                    {{-- Overlay --}}
                    <div id="modal-edit-profil-overlay" class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>

                    {{-- Modal Box --}}
                    <div class="relative w-full max-w-lg overflow-hidden rounded-2xl bg-white shadow-xl">

                        {{-- Header --}}
                        <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">
                            <h3 class="font-serif text-lg text-slate-900">Edit Profil</h3>

                            <button type="button" id="btn-close-edit-profil"
                                class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 transition hover:bg-slate-100 hover:text-slate-600">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M6 6l12 12M6 18L18 6" />
                                </svg>
                            </button>
                        </div>

                        {{-- Form --}}
                        <form action="/internship/profil/edit" method="POST" enctype="multipart/form-data"
                            class="px-6 py-5">
                            @csrf
                            @method('PUT')

                            <div class="space-y-4">

                                {{-- Foto Profil --}}
                                <div class="flex items-center gap-4">

                                    <div id="preview-foto-wrapper"
                                        class="flex h-16 w-16 flex-shrink-0 items-center justify-center overflow-hidden rounded-2xl border border-slate-200 bg-slate-100 text-xl font-bold text-slate-500">

                                        @if (auth()->user()->profil?->foto)
                                            <img id="preview-foto"
                                                src="{{ asset('storage/' . auth()->user()->profil->foto) }}"
                                                alt="Foto Profil" class="h-full w-full object-cover">
                                        @else
                                            <img id="preview-foto" src="" alt="Foto Profil"
                                                class="hidden h-full w-full object-cover">
                                            <span
                                                id="preview-foto-placeholder">{{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}</span>
                                        @endif

                                    </div>

                                    <div>
                                        <label for="input-foto"
                                            class="inline-flex cursor-pointer items-center rounded-xl border border-slate-200 px-4 py-2 text-xs font-semibold text-slate-600 transition hover:bg-slate-50">
                                            Ganti Foto
                                        </label>
                                        <input type="file" name="foto" id="input-foto" accept="image/*"
                                            class="hidden">
                                        <p class="mt-1 text-xs text-slate-400">JPG atau PNG, maks 2MB.</p>
                                    </div>

                                </div>

                                <div>
                                    <label
                                        class="mb-1.5 block text-xs font-medium uppercase tracking-wider text-slate-400">
                                        Nama Lengkap
                                    </label>
                                    <input type="text" name="name" value="{{ auth()->user()->name }}"
                                        class="w-full rounded-xl border border-slate-200 px-4 py-2.5 text-sm text-slate-800 focus:border-slate-400 focus:outline-none">
                                </div>

                                <div>
                                    <label
                                        class="mb-1.5 block text-xs font-medium uppercase tracking-wider text-slate-400">
                                        Email
                                    </label>
                                    <input type="email" name="email" value="{{ auth()->user()->email }}"
                                        class="w-full rounded-xl border border-slate-200 px-4 py-2.5 text-sm text-slate-800 focus:border-slate-400 focus:outline-none">
                                </div>

                                <div>
                                    <label
                                        class="mb-1.5 block text-xs font-medium uppercase tracking-wider text-slate-400">
                                        Nomor HP
                                    </label>
                                    <input type="text" name="no_hp"
                                        value="{{ auth()->user()->profil?->no_hp }}"
                                        class="w-full rounded-xl border border-slate-200 px-4 py-2.5 text-sm text-slate-800 focus:border-slate-400 focus:outline-none">
                                </div>

                                <div>
                                    <label
                                        class="mb-1.5 block text-xs font-medium uppercase tracking-wider text-slate-400">
                                        Alamat
                                    </label>
                                    <textarea name="alamat" rows="3"
                                        class="w-full rounded-xl border border-slate-200 px-4 py-2.5 text-sm text-slate-800 focus:border-slate-400 focus:outline-none">{{ auth()->user()->profil?->alamat }}</textarea>
                                </div>

                            </div>

                            {{-- Footer --}}
                            <div class="mt-6 flex justify-end gap-2">
                                <button type="button" id="btn-cancel-edit-profil"
                                    class="rounded-xl border border-slate-200 px-5 py-2.5 text-sm font-semibold text-slate-600 transition hover:bg-slate-50">
                                    Batal
                                </button>

                                <button type="submit"
                                    class="rounded-xl bg-[#111827] px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-slate-800">
                                    Simpan
                                </button>
                            </div>

                        </form>

                    </div>

                </div>


                {{-- ====================================================
                PROFILE CARD
            ===================================================== --}}
                <section>
                    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                        {{-- Profile Information --}}
                        <div class="px-5 pt-6 pb-5 md:px-7 md:pb-6">
                            <div class="flex flex-col gap-4 sm:flex-row sm:items-center">

                                {{-- Avatar --}}
                                <div
                                    class="flex h-20 w-20 flex-shrink-0 items-center justify-center
                            overflow-hidden rounded-2xl border border-slate-200
                            bg-slate-100 text-2xl font-bold text-slate-500
                            md:h-24 md:w-24">
                                    @if (auth()->user()->profil?->foto)
                                        <img src="{{ asset('storage/' . auth()->user()->profil->foto) }}"
                                            alt="Foto Profil" class="h-full w-full object-cover">
                                    @else
                                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                                    @endif
                                </div>

                                {{-- Identity --}}
                                <div class="min-w-0">
                                    <h2 class="truncate text-xl font-bold text-slate-800 md:text-2xl">
                                        {{ auth()->user()->name ?? 'User' }}
                                    </h2>
                                    <p class="mt-1 truncate text-sm text-slate-400">
                                        {{ auth()->user()->email ?? '-' }}
                                    </p>
                                </div>

                            </div>

                            {{-- Status --}}
                            <div class="mt-4 flex flex-wrap items-center gap-2">
                                @if (auth()->user()->is_active)
                                    <span
                                        class="inline-flex items-center gap-2 rounded-full bg-emerald-50
                                 px-3 py-1.5 text-xs font-medium text-emerald-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                        Akun Aktif
                                    </span>
                                @else
                                    <span
                                        class="inline-flex items-center gap-2 rounded-full bg-red-50
                                 px-3 py-1.5 text-xs font-medium text-red-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-red-500"></span>
                                        Tidak Aktif
                                    </span>
                                @endif

                                <span
                                    class="inline-flex items-center gap-2 rounded-full bg-slate-100
                             px-3 py-1.5 text-xs font-medium capitalize text-slate-500">
                                    {{ auth()->user()->role ?? 'Internship' }}
                                </span>
                            </div>

                        </div>
                    </div>
                </section>


                {{-- ====================================================
                INFORMATION
            ===================================================== --}}
                <section>

                    <div class="grid gap-5 lg:grid-cols-3">

                        {{-- Personal Information --}}
                        <div
                            class="overflow-hidden rounded-2xl
                        border border-slate-200
                        bg-white shadow-sm lg:col-span-2">

                            {{-- Header --}}
                            <div class="border-b border-slate-100
                            px-5 py-4 md:px-6">

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-10 w-10
                                    items-center justify-center
                                    rounded-xl bg-slate-100">

                                        <svg class="h-5 w-5 text-slate-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M15 19a6 6 0 00-12 0M9 10a4 4 0 110-8 4 4 0 010 8Zm7-6v6m3-3h-6" />

                                        </svg>

                                    </div>

                                    <div>

                                        <h2 class="text-base font-semibold text-slate-800">

                                            Informasi Pribadi

                                        </h2>

                                        <p class="mt-0.5 text-xs text-slate-400">

                                            Data pribadi peserta internship.

                                        </p>

                                    </div>

                                </div>

                            </div>


                            {{-- Information List --}}
                            <div class="divide-y divide-slate-100">

                                {{-- Nama --}}
                                <div
                                    class="flex flex-col gap-2 px-5 py-4
                                sm:flex-row sm:items-center
                                sm:justify-between md:px-6">

                                    <div class="flex items-center gap-3">

                                        <div
                                            class="flex h-9 w-9 flex-shrink-0
                                        items-center justify-center
                                        rounded-lg bg-slate-100">

                                            <svg class="h-4 w-4 text-slate-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">

                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5"
                                                    d="M15 19a6 6 0 00-12 0M9 10a4 4 0 110-8 4 4 0 010 8Z" />

                                            </svg>

                                        </div>

                                        <span class="text-sm text-slate-500">
                                            Nama Lengkap
                                        </span>

                                    </div>

                                    <span class="text-sm font-semibold text-slate-800 sm:text-right">

                                        {{ auth()->user()->name ?? '-' }}

                                    </span>

                                </div>


                                {{-- Email --}}
                                <div
                                    class="flex flex-col gap-2 px-5 py-4
                                sm:flex-row sm:items-center
                                sm:justify-between md:px-6">

                                    <div class="flex items-center gap-3">

                                        <div
                                            class="flex h-9 w-9 flex-shrink-0
                                        items-center justify-center
                                        rounded-lg bg-slate-100">

                                            <svg class="h-4 w-4 text-slate-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">

                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5"
                                                    d="M3 7l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2Z" />

                                            </svg>

                                        </div>

                                        <span class="text-sm text-slate-500">
                                            Email
                                        </span>

                                    </div>

                                    <span class="break-all text-sm font-semibold text-slate-800 sm:text-right">

                                        {{ auth()->user()->email ?? '-' }}

                                    </span>

                                </div>


                                {{-- Nomor HP --}}
                                <div
                                    class="flex flex-col gap-2 px-5 py-4
                                sm:flex-row sm:items-center
                                sm:justify-between md:px-6">

                                    <div class="flex items-center gap-3">

                                        <div
                                            class="flex h-9 w-9 flex-shrink-0
                                        items-center justify-center
                                        rounded-lg bg-slate-100">

                                            <svg class="h-4 w-4 text-slate-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">

                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5"
                                                    d="M6.5 3h2l1.5 4-2 1.5a15 15 0 007.5 7.5l1.5-2 4 1.5v2a2 2 0 01-2 2C11.82 19.5 4.5 12.18 4.5 3.5A2 2 0 016.5 3Z" />

                                            </svg>

                                        </div>

                                        <span class="text-sm text-slate-500">
                                            Nomor HP
                                        </span>

                                    </div>

                                    <span class="text-sm font-semibold text-slate-800 sm:text-right">

                                        {{ auth()->user()->profil?->no_hp ?? '-' }}

                                    </span>

                                </div>


                                {{-- Alamat --}}
                                <div
                                    class="flex flex-col gap-2 px-5 py-4
                                sm:flex-row sm:items-start
                                sm:justify-between md:px-6">

                                    <div class="flex items-center gap-3">

                                        <div
                                            class="flex h-9 w-9 flex-shrink-0
                                        items-center justify-center
                                        rounded-lg bg-slate-100">

                                            <svg class="h-4 w-4 text-slate-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">

                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5"
                                                    d="M12 21s7-6.1 7-12a7 7 0 10-14 0c0 5.9 7 12 7 12Z" />

                                                <circle cx="12" cy="9" r="2.5" stroke="currentColor"
                                                    stroke-width="1.5" />

                                            </svg>

                                        </div>

                                        <span class="text-sm text-slate-500">
                                            Alamat
                                        </span>

                                    </div>

                                    <span
                                        class="text-sm font-semibold leading-6 text-slate-800 sm:max-w-md sm:text-right">

                                        {{ auth()->user()->profil?->alamat ?? '-' }}

                                    </span>

                                </div>

                            </div>

                        </div>


                        {{-- Account Information --}}
                        <div
                            class="overflow-hidden rounded-2xl
                        border border-slate-200
                        bg-white shadow-sm">

                            {{-- Header --}}
                            <div class="border-b border-slate-100
                            px-5 py-4">

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-10 w-10
                                    items-center justify-center
                                    rounded-xl bg-slate-100">

                                        <svg class="h-5 w-5 text-slate-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M12 3l7 4v5c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V7l7-4Z" />

                                            <path d="m9 12 2 2 4-4" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />

                                        </svg>

                                    </div>

                                    <div>

                                        <h2 class="text-base font-semibold text-slate-800">

                                            Status Akun

                                        </h2>

                                        <p class="mt-0.5 text-xs text-slate-400">

                                            Informasi akun kamu.

                                        </p>

                                    </div>

                                </div>

                            </div>


                            {{-- Account Details --}}
                            <div class="space-y-5 p-5">

                                {{-- Status --}}
                                <div>

                                    <p
                                        class="text-xs font-medium uppercase
                                    tracking-wider text-slate-400">

                                        Status

                                    </p>

                                    <div class="mt-2">

                                        @if (auth()->user()->is_active)
                                            <span
                                                class="inline-flex items-center
                                            gap-2 rounded-full
                                            bg-emerald-50 px-3 py-1.5
                                            text-xs font-semibold
                                            text-emerald-600">

                                                <span
                                                    class="h-1.5 w-1.5 rounded-full
                                                bg-emerald-500">
                                                </span>

                                                Aktif

                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center
                                            gap-2 rounded-full
                                            bg-red-50 px-3 py-1.5
                                            text-xs font-semibold
                                            text-red-600">

                                                <span
                                                    class="h-1.5 w-1.5 rounded-full
                                                bg-red-500">
                                                </span>

                                                Tidak Aktif

                                            </span>
                                        @endif

                                    </div>

                                </div>


                                {{-- Role --}}
                                <div>

                                    <p
                                        class="text-xs font-medium uppercase
                                    tracking-wider text-slate-400">

                                        Role

                                    </p>

                                    <p
                                        class="mt-1 text-sm font-semibold
                                    capitalize text-slate-800">

                                        {{ auth()->user()->role ?? '-' }}

                                    </p>

                                </div>


                                {{-- Bergabung --}}
                                <div>

                                    <p
                                        class="text-xs font-medium uppercase
                                    tracking-wider text-slate-400">

                                        Bergabung

                                    </p>

                                    <p
                                        class="mt-1 text-sm font-semibold
                                    text-slate-800">

                                        {{ auth()->user()->created_at?->translatedFormat('d F Y') ?? '-' }}

                                    </p>

                                </div>


                                {{-- Update --}}
                                <div>

                                    <p
                                        class="text-xs font-medium uppercase
                                    tracking-wider text-slate-400">

                                        Terakhir Diperbarui

                                    </p>

                                    <p
                                        class="mt-1 text-sm font-semibold
                                    text-slate-800">

                                        {{ auth()->user()->updated_at?->translatedFormat('d F Y') ?? '-' }}

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                FOOTER
            ===================================================== --}}
                <div
                    class="flex flex-col gap-2
                border-t border-slate-200 pt-4
                sm:flex-row sm:items-center
                sm:justify-between">

                    <p class="text-xs text-slate-400">
                        Informasi profil tersimpan dalam sistem.
                    </p>

                    <div class="flex items-center gap-2
                    text-xs text-slate-400">

                        <span class="h-2 w-2 rounded-full bg-emerald-500">
                        </span>

                        Data profil aktif

                    </div>

                </div>

            </main>

        </div>

    </div>


    {{-- ============================================================
    PROFILE DROPDOWN SCRIPT
============================================================= --}}
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


    {{-- ============================================================
    MOBILE SIDEBAR SCRIPT
============================================================= --}}
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

    <script>
        const editProfilModal = document.getElementById('modal-edit-profil');
        const btnOpenEditProfil = document.getElementById('btn-open-edit-profil');
        const btnCloseEditProfil = document.getElementById('btn-close-edit-profil');
        const btnCancelEditProfil = document.getElementById('btn-cancel-edit-profil');
        const editProfilOverlay = document.getElementById('modal-edit-profil-overlay');

        function openEditProfilModal() {
            editProfilModal.classList.remove('hidden');
            editProfilModal.classList.add('flex');
        }

        function closeEditProfilModal() {
            editProfilModal.classList.add('hidden');
            editProfilModal.classList.remove('flex');
        }

        btnOpenEditProfil.addEventListener('click', openEditProfilModal);
        btnCloseEditProfil.addEventListener('click', closeEditProfilModal);
        btnCancelEditProfil.addEventListener('click', closeEditProfilModal);
        editProfilOverlay.addEventListener('click', closeEditProfilModal);
    </script>

    <script>
        const inputFoto = document.getElementById('input-foto');
        const previewFoto = document.getElementById('preview-foto');
        const previewPlaceholder = document.getElementById('preview-foto-placeholder');

        inputFoto.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                previewFoto.src = e.target.result;
                previewFoto.classList.remove('hidden');
                if (previewPlaceholder) previewPlaceholder.classList.add('hidden');
            };
            reader.readAsDataURL(file);
        });
    </script>

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
</body>

</html>
