<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Internship </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-slate-50 min-h-screen text-slate-800">

    <div class="flex min-h-screen">
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

        <div id="overlay" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-30 hidden md:hidden"></div>

        <div class="flex-1 md:ml-64 min-w-0">

            <header
                class="sticky top-0 z-20 bg-white/95 backdrop-blur
                border-b border-slate-200
                px-4 md:px-8 py-4
                flex items-center justify-between">

                <div class="flex items-center gap-4">

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
                            Internship Panel
                        </p>

                        <h2 class="font-serif text-xl md:text-2xl text-slate-900 mt-0.5">
                            Absensi
                        </h2>

                        <p class="text-xs md:text-sm text-slate-400 mt-1">
                            {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
                        </p>

                    </div>
                </div>

                <div class="relative">

                    <button type="button" id="profile-menu-button"
                        class="w-10 h-10 rounded-full
                        bg-gradient-to-br from-amber-400 to-yellow-600
                        flex items-center justify-center
                        text-white text-sm font-semibold
                        hover:scale-105 transition shadow-sm">

                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}

                    </button>

                    <div id="profile-menu"
                        class="hidden absolute right-0 mt-3 w-60 rounded-2xl
                        bg-white shadow-xl shadow-slate-200/70
                        border border-slate-100 overflow-hidden z-50">

                        <div class="px-4 py-4 bg-slate-50 border-b border-slate-100">

                            <p class="text-sm font-semibold text-slate-800">
                                {{ auth()->user()->name ?? 'User' }}
                            </p>

                            <p class="text-xs text-slate-400 truncate mt-1">
                                {{ auth()->user()->email ?? '-' }}
                            </p>

                        </div>

                        <a href="/internship/profil"
                            class="flex items-center gap-3 px-4 py-3
                            text-sm text-slate-600
                            hover:bg-slate-50 transition">

                            <div
                                class="w-8 h-8 rounded-lg bg-slate-100
                                flex items-center justify-center">

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
                                class="w-full flex items-center gap-3 px-4 py-3
                                text-sm text-red-500
                                hover:bg-red-50 transition">

                                <div
                                    class="w-8 h-8 rounded-lg bg-red-50
                                    flex items-center justify-center">

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

                @if (session('success'))
                    <div id="success-alert"
                        class="fixed top-6 right-6 z-50 w-[380px]
                        max-w-[calc(100%-2rem)]
                        rounded-2xl border border-emerald-100
                        bg-white p-4
                        shadow-2xl shadow-emerald-100/50
                        transition-all duration-500 ease-in-out">

                        <div class="flex items-start gap-4">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center
                                justify-center rounded-full bg-emerald-100">

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

            </header>

            <main class="p-4 md:p-8 space-y-6">

                <section>
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 md:p-6">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5">
                            <div>
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                                    <p class="text-xs font-medium text-slate-400 uppercase tracking-wider">
                                        Attendance
                                    </p>
                                </div>

                                <h1 class="font-serif text-2xl md:text-3xl text-slate-900">
                                    Riwayat Absensi
                                </h1>

                                <p class="text-sm text-slate-400 mt-1">
                                    Daftar seluruh absensi kamu selama menjalani internship.
                                </p>
                            </div>

                            <div
                                class="inline-flex items-center gap-3 px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 w-fit">

                                <div
                                    class="w-9 h-9 rounded-lg bg-white border border-slate-200 flex items-center justify-center">

                                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />

                                    </svg>
                                </div>

                                <div>
                                    <p class="text-[11px] text-slate-400 leading-none">
                                        Total Absensi
                                    </p>

                                    <p class="text-sm font-semibold text-slate-700 mt-1">
                                        {{ $absensis->count() }} Data
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div
                        class="px-5 md:px-6 py-5  border-b border-slate-100  flex flex-col md:flex-row  md:items-center md:justify-between gap-3">
                        <div>
                            <h2 class="text-base font-semibold text-slate-800">
                                Data Kehadiran
                            </h2>

                            <p class="text-xs text-slate-400 mt-1">
                                Informasi jam masuk, jam pulang, foto, dan status kehadiran.
                            </p>

                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-[#111827]">

                                    <th
                                        class="rounded-tl-xl px-5 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Nama
                                    </th>

                                    <th
                                        class="px-5 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Tanggal
                                    </th>

                                    <th
                                        class="px-5 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Jam Masuk
                                    </th>

                                    <th
                                        class="px-5 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Foto Masuk
                                    </th>

                                    <th
                                        class="px-5 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Jam Pulang
                                    </th>

                                    <th
                                        class="px-5 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Foto Pulang
                                    </th>

                                    <th
                                        class="px-5 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Status
                                    </th>

                                    <th
                                        class="rounded-tr-xl px-5 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Aksi
                                    </th>

                                </tr>
                            </thead>

                            <tbody class="divide-y divide-slate-100">

                                @forelse ($absensis as $absensi)
                                    <tr class="group hover:bg-slate-50 transition">

                                        {{-- Nama --}}
                                        <td class="px-5 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center
                                flex-shrink-0 text-xs font-semibold text-slate-500 group-hover:bg-slate-200 transition">
                                                    {{ strtoupper(substr($absensi->user->name ?? 'U', 0, 1)) }}
                                                </div>

                                                <div>
                                                    <p class="font-semibold text-slate-700">
                                                        {{ $absensi->user->name ?? '-' }}
                                                    </p>
                                                    <p class="text-[11px] text-slate-400 mt-0.5">
                                                        {{ $absensi->user->email ?? '-' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        {{-- Tanggal --}}
                                        <td class="px-5 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-9 h-9 rounded-lg bg-slate-100 flex items-center justify-center flex-shrink-0 group-hover:bg-slate-200 transition">
                                                    <svg class="w-4 h-4 text-slate-500" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </div>

                                                <div>
                                                    <p class="font-semibold text-slate-700">
                                                        {{ $absensi->tanggal->format('d F Y') }}
                                                    </p>
                                                    <p class="text-[11px] text-slate-400 mt-0.5">
                                                        {{ $absensi->tanggal->translatedFormat('l') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        {{-- Jam Masuk --}}
                                        <td class="px-5 py-4 whitespace-nowrap">
                                            @if ($absensi->jam_masuk)
                                                <div class="flex items-center gap-2">
                                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                                    <span class="font-semibold text-emerald-700">
                                                        {{ $absensi->jam_masuk }}
                                                    </span>
                                                </div>
                                            @else
                                                <span class="text-slate-300">-</span>
                                            @endif
                                        </td>

                                        {{-- Foto Masuk --}}
                                        <td class="px-5 py-4 whitespace-nowrap">
                                            @if ($absensi->foto_masuk)
                                                <a href="{{ asset('storage/' . $absensi->foto_masuk) }}"
                                                    target="_blank" title="Lihat foto masuk">
                                                    <img src="{{ asset('storage/' . $absensi->foto_masuk) }}"
                                                        alt="Foto Masuk"
                                                        class="w-12 h-12 rounded-lg object-cover border border-slate-200
                                    hover:scale-105 transition duration-200 cursor-pointer">
                                                </a>
                                            @else
                                                <span class="text-slate-300">-</span>
                                            @endif
                                        </td>

                                        {{-- Jam Pulang --}}
                                        <td class="px-5 py-4 whitespace-nowrap">
                                            @if ($absensi->jam_pulang)
                                                <div class="flex items-center gap-2">
                                                    <span class="w-2 h-2 rounded-full bg-slate-400"></span>
                                                    <span class="font-semibold text-slate-600">
                                                        {{ $absensi->jam_pulang }}
                                                    </span>
                                                </div>
                                            @else
                                                <span class="text-slate-300">-</span>
                                            @endif
                                        </td>

                                        {{-- Foto Pulang --}}
                                        <td class="px-5 py-4 whitespace-nowrap">
                                            @if ($absensi->foto_pulang)
                                                <a href="{{ asset('storage/' . $absensi->foto_pulang) }}"
                                                    target="_blank" title="Lihat foto pulang">
                                                    <img src="{{ asset('storage/' . $absensi->foto_pulang) }}"
                                                        alt="Foto Pulang"
                                                        class="w-12 h-12 rounded-lg object-cover border border-slate-200
                                    hover:scale-105 transition duration-200 cursor-pointer">
                                                </a>
                                            @else
                                                <span class="text-slate-300">-</span>
                                            @endif
                                        </td>

                                        {{-- Status --}}
                                        <td class="px-5 py-4 whitespace-nowrap">
                                            @if ($absensi->status === 'hadir')
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                                    Hadir
                                                </span>
                                            @elseif ($absensi->status === 'sakit')
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold bg-amber-50 text-amber-700">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                                    Sakit
                                                </span>
                                            @elseif ($absensi->status === 'izin')
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-700">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                                                    Izin
                                                </span>
                                            @elseif ($absensi->status === 'alfa')
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold bg-red-50 text-red-700">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span>
                                                    Alfa
                                                </span>
                                            @endif
                                        </td>

                                        {{-- Aksi --}}
                                        <td class="px-5 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-2">

                                                <button type="button" title="Edit Status"
                                                    class="btn-edit-status flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 text-slate-500 transition hover:bg-slate-50"
                                                    data-id="{{ $absensi->id }}"
                                                    data-status="{{ $absensi->status }}"
                                                    data-nama="{{ $absensi->user->name ?? '-' }}">

                                                    <svg class="h-4 w-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.8"
                                                            d="M16.862 3.487a2.1 2.1 0 013.111 2.828L8.5 17.788 4 19l1.212-4.5L16.862 3.487Z" />
                                                    </svg>
                                                </button>

                                                <button type="button" title="Hapus"
                                                    class="btn-delete-absensi flex h-8 w-8 items-center justify-center rounded-lg border border-red-200 text-red-500 transition hover:bg-red-50"
                                                    data-id="{{ $absensi->id }}"
                                                    data-nama="{{ $absensi->user->name ?? '-' }}"
                                                    data-tanggal="{{ $absensi->tanggal->format('d F Y') }}">

                                                    <svg class="h-4 w-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.8"
                                                            d="M6 7h12M9 7V5a1 1 0 011-1h4a1 1 0 011 1v2m2 0-.7 12.1a2 2 0 01-2 1.9H8.7a2 2 0 01-2-1.9L6 7h12Z" />
                                                    </svg>
                                                </button>

                                            </div>
                                        </td>

                                    </tr>
                                @empty

                                    <tr>
                                        <td colspan="8" class="px-5 py-16 text-center">
                                            <div class="flex flex-col items-center">
                                                <div
                                                    class="w-16 h-16 rounded-2xl bg-slate-100 flex items-center justify-center mb-4">
                                                    <svg class="w-8 h-8 text-slate-300" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </div>

                                                <p class="text-sm font-semibold text-slate-600">
                                                    Belum ada data absensi
                                                </p>

                                                <p class="text-xs text-slate-400 mt-1">
                                                    Data absensi kamu akan muncul di halaman ini.
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div id="modal-edit-status" class="fixed inset-0 z-50 hidden items-center justify-center p-4">

                        <div id="modal-edit-status-overlay" class="absolute inset-0 bg-black/40 backdrop-blur-sm">
                        </div>

                        <div class="relative w-full max-w-sm overflow-hidden rounded-2xl bg-white shadow-xl">

                            <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">
                                <h3 class="font-serif text-lg text-slate-900">Edit Status Absensi</h3>

                                <button type="button" id="btn-close-edit-status"
                                    class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 transition hover:bg-slate-100 hover:text-slate-600">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 6l12 12M6 18L18 6" />
                                    </svg>
                                </button>
                            </div>

                            <form id="form-edit-status" method="POST" class="px-6 py-5">
                                @csrf
                                @method('PATCH')

                                <p class="mb-4 text-sm text-slate-500">
                                    Ubah status untuk <span id="edit-status-nama"
                                        class="font-semibold text-slate-800"></span>
                                </p>

                                <label
                                    class="mb-1.5 block text-xs font-medium uppercase tracking-wider text-slate-400">
                                    Status
                                </label>

                                <select name="status" id="edit-status-select"
                                    class="w-full rounded-xl border border-slate-200 px-4 py-2.5 text-sm text-slate-800 focus:border-slate-400 focus:outline-none">
                                    <option value="hadir">Hadir</option>
                                    <option value="sakit">Sakit</option>
                                    <option value="izin">Izin</option>
                                    <option value="alfa">Alfa</option>
                                </select>

                                <div class="mt-6 flex justify-end gap-2">
                                    <button type="button" id="btn-cancel-edit-status"
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

                    <div id="modal-delete-absensi" class="fixed inset-0 z-50 hidden items-center justify-center p-4">

                        <div id="modal-delete-absensi-overlay" class="absolute inset-0 bg-black/40 backdrop-blur-sm">
                        </div>

                        <div class="relative w-full max-w-sm overflow-hidden rounded-2xl bg-white shadow-xl">

                            <div class="px-6 py-6 text-center">

                                <div
                                    class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-red-50">
                                    <svg class="h-6 w-6 text-red-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                            d="M12 9v4m0 4h.01M10.29 3.86 1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0Z" />
                                    </svg>
                                </div>

                                <h3 class="font-serif text-lg text-slate-900">Hapus Data Absensi?</h3>

                                <p class="mt-2 text-sm text-slate-500">
                                    Data absensi <span id="delete-absensi-nama"
                                        class="font-semibold text-slate-700"></span>
                                    pada <span id="delete-absensi-tanggal"
                                        class="font-semibold text-slate-700"></span>
                                    akan dihapus permanen dan tidak bisa dikembalikan.
                                </p>

                            </div>

                            <form id="form-delete-absensi" method="POST" class="flex border-t border-slate-100">
                                @csrf
                                @method('DELETE')

                                <button type="button" id="btn-cancel-delete-absensi"
                                    class="flex-1 px-5 py-3.5 text-sm font-semibold text-slate-600 transition hover:bg-slate-50">
                                    Batal
                                </button>

                                <button type="submit"
                                    class="flex-1 border-l border-slate-100 px-5 py-3.5 text-sm font-semibold text-red-600 transition hover:bg-red-50">
                                    Ya, Hapus
                                </button>
                            </form>

                        </div>
                    </div>

                    @if ($absensis->count() > 0)
                        <div
                            class="px-5 md:px-6 py-4
                            bg-slate-50
                            border-t border-slate-100
                            flex items-center justify-between">

                            <p class="text-xs text-slate-400">
                                Menampilkan
                                <span class="font-semibold text-slate-600">
                                    {{ $absensis->count() }}
                                </span>
                                data absensi
                            </p>

                            <div class="flex items-center gap-2 text-xs text-slate-400">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                Sistem absensi aktif
                            </div>
                        </div>
                    @endif
                </section>
            </main>
        </div>
    </div>


    {{-- ================= MOBILE SIDEBAR SCRIPT ================= --}}
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
        const modalEditStatus = document.getElementById('modal-edit-status');
        const modalEditStatusOverlay = document.getElementById('modal-edit-status-overlay');
        const formEditStatus = document.getElementById('form-edit-status');
        const editStatusSelect = document.getElementById('edit-status-select');
        const editStatusNama = document.getElementById('edit-status-nama');
        const btnCloseEditStatus = document.getElementById('btn-close-edit-status');
        const btnCancelEditStatus = document.getElementById('btn-cancel-edit-status');

        document.querySelectorAll('.btn-edit-status').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const id = btn.dataset.id;
                const status = btn.dataset.status;
                const nama = btn.dataset.nama;

                formEditStatus.action = `/admin/absensi/${id}/status`;
                editStatusSelect.value = status;
                editStatusNama.textContent = nama;

                modalEditStatus.classList.remove('hidden');
                modalEditStatus.classList.add('flex');
            });
        });

        function closeEditStatusModal() {
            modalEditStatus.classList.add('hidden');
            modalEditStatus.classList.remove('flex');
        }

        btnCloseEditStatus.addEventListener('click', closeEditStatusModal);
        btnCancelEditStatus.addEventListener('click', closeEditStatusModal);
        modalEditStatusOverlay.addEventListener('click', closeEditStatusModal);
    </script>

    <script>
        const modalDeleteAbsensi = document.getElementById('modal-delete-absensi');
        const modalDeleteAbsensiOverlay = document.getElementById('modal-delete-absensi-overlay');
        const formDeleteAbsensi = document.getElementById('form-delete-absensi');
        const deleteAbsensiNama = document.getElementById('delete-absensi-nama');
        const deleteAbsensiTanggal = document.getElementById('delete-absensi-tanggal');
        const btnCancelDeleteAbsensi = document.getElementById('btn-cancel-delete-absensi');

        document.querySelectorAll('.btn-delete-absensi').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const id = btn.dataset.id;

                formDeleteAbsensi.action = `/admin/absensi/${id}`;
                deleteAbsensiNama.textContent = btn.dataset.nama;
                deleteAbsensiTanggal.textContent = btn.dataset.tanggal;

                modalDeleteAbsensi.classList.remove('hidden');
                modalDeleteAbsensi.classList.add('flex');
            });
        });

        function closeDeleteAbsensiModal() {
            modalDeleteAbsensi.classList.add('hidden');
            modalDeleteAbsensi.classList.remove('flex');
        }

        btnCancelDeleteAbsensi.addEventListener('click', closeDeleteAbsensiModal);
        modalDeleteAbsensiOverlay.addEventListener('click', closeDeleteAbsensiModal);
    </script>

</body>

</html>
