<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Admin</title>

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

                        <p
                            class="text-xs font-medium uppercase
                            tracking-wider text-slate-400">

                            Admin Panel

                        </p>

                        <h2 class="font-serif text-xl text-slate-900 md:text-2xl">
                            Profil Admin
                        </h2>

                        <p class="mt-0.5 text-xs text-slate-400 md:text-sm">

                            {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}

                        </p>

                    </div>

                </div>


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
                            {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                        @endif

                    </button>


                    {{-- Dropdown --}}
                    <div id="profile-menu"
                        class="absolute right-0 z-50 mt-3 hidden
                        w-60 overflow-hidden rounded-2xl
                        border border-slate-100 bg-white
                        shadow-xl shadow-slate-200/70">

                        {{-- User Information --}}
                        <div class="border-b border-slate-100 bg-slate-50 px-4 py-4">

                            <p class="text-sm font-semibold text-slate-800">
                                {{ auth()->user()->name ?? 'Admin' }}
                            </p>

                            <p class="mt-1 truncate text-xs text-slate-400">
                                {{ auth()->user()->email ?? '-' }}
                            </p>

                        </div>


                        {{-- Profile --}}
                        <a href="/admin/profil"
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

                            Profil Admin

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

                    <div
                        class="rounded-2xl border border-slate-200
                        bg-white px-5 py-5 shadow-sm
                        md:px-6 md:py-5">

                        <div
                            class="flex flex-col gap-4
                            sm:flex-row sm:items-center
                            sm:justify-between">

                            <div>

                                <div class="mb-1.5 flex items-center gap-2">

                                    <span class="h-2 w-2 rounded-full bg-slate-300">
                                    </span>

                                    <p
                                        class="text-xs font-medium uppercase
                                        tracking-wider text-slate-400">

                                        Administrator

                                    </p>

                                </div>

                                <h1 class="font-serif text-2xl text-slate-900 md:text-3xl">
                                    Profil Admin
                                </h1>

                                <p class="mt-1 text-sm text-slate-400">
                                    Kelola dan lihat informasi akun administrator.
                                </p>

                            </div>


                            {{-- Edit Button --}}
                            {{-- <a
                                href="/admin/profil/edit"
                                class="inline-flex w-fit items-center
                                justify-center gap-2 rounded-xl
                                bg-[#111827] px-5 py-2.5
                                text-sm font-semibold text-white
                                shadow-sm transition hover:bg-slate-800">
 
                                <svg
                                    class="h-4 w-4"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24">
 
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M16.862 3.487a2.1 2.1 0 013.111 2.828L8.5 17.788 4 19l1.212-4.5L16.862 3.487Z" />
 
                                </svg>
 
                                Edit Profil
 
                            </a> --}}

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    PROFILE CARD
                ===================================================== --}}
                <section>

                    <div
                        class="overflow-hidden rounded-2xl
                        border border-slate-200 bg-white
                        shadow-sm">

                        {{-- Profile Information --}}
                        <div class="px-5 pt-6 pb-5 md:px-7 md:pb-6">

                            <div
                                class="flex flex-col gap-4
                                sm:flex-row sm:items-center">

                                {{-- Avatar --}}
                                <div
                                    class="flex h-20 w-20 flex-shrink-0
                                    items-center justify-center
                                    overflow-hidden rounded-2xl
                                    border border-slate-200
                                    bg-slate-100
                                    text-2xl font-bold text-slate-500
                                    md:h-24 md:w-24">

                                    @if (auth()->user()->profil?->foto)
                                        <img src="{{ asset('storage/' . auth()->user()->profil->foto) }}"
                                            alt="Foto Profil" class="h-full w-full object-cover">
                                    @else
                                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                                    @endif

                                </div>


                                {{-- Identity --}}
                                <div class="min-w-0">

                                    <h2
                                        class="truncate text-xl font-bold
                                        text-slate-800 md:text-2xl">

                                        {{ auth()->user()->name ?? 'Admin' }}

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
                                        class="inline-flex items-center gap-2
                                        rounded-full bg-emerald-50
                                        px-3 py-1.5 text-xs font-medium
                                        text-emerald-600">

                                        <span
                                            class="h-1.5 w-1.5 rounded-full
                                            bg-emerald-500">
                                        </span>

                                        Akun Aktif

                                    </span>
                                @else
                                    <span
                                        class="inline-flex items-center gap-2
                                        rounded-full bg-red-50
                                        px-3 py-1.5 text-xs font-medium
                                        text-red-600">

                                        <span
                                            class="h-1.5 w-1.5 rounded-full
                                            bg-red-500">
                                        </span>

                                        Tidak Aktif

                                    </span>
                                @endif


                                <span
                                    class="inline-flex items-center gap-2
                                    rounded-full bg-slate-100
                                    px-3 py-1.5 text-xs font-medium
                                    capitalize text-slate-500">

                                    {{ auth()->user()->role ?? 'admin' }}

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
                                            Informasi pribadi administrator.
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

                                    <span
                                        class="text-sm font-semibold
                                        text-slate-800 sm:text-right">

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

                                    <span
                                        class="break-all text-sm font-semibold
                                        text-slate-800 sm:text-right">

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

                                    <span
                                        class="text-sm font-semibold
                                        text-slate-800 sm:text-right">

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
                                        class="text-sm font-semibold
                                        leading-6 text-slate-800
                                        sm:max-w-md sm:text-right">

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

                                            <path stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"
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
                                            Informasi akun administrator.
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

                                        {{ auth()->user()->role ?? 'admin' }}

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
                        Informasi akun administrator tersimpan dalam sistem.
                    </p>

                    <div class="flex items-center gap-2
                        text-xs text-slate-400">

                        <span class="h-2 w-2 rounded-full bg-emerald-500">
                        </span>

                        Sistem Admin Aktif

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

</body>

</html>
