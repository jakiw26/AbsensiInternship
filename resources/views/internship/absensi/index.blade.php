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

            <nav class="flex-1 px-4 py-6 space-y-1.5">

                <a href="/internship/dashboard"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('internship/dashboard')
                        ? 'bg-white text-[#111827] font-semibold shadow-sm'
                        : 'text-white/55 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">
                        <path d="M3 10.5 10 4l7 6.5" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round"stroke-linejoin="round" />
                        <path d="M5 9v7h10V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Dashboard
                </a>

                <a href="/internship/absensi"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('internship/absensi*') ? 'bg-white text-[#111827] font-semibold shadow-sm' : 'text-white/55 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">
                        <circle cx="10" cy="10" r="7" stroke="currentColor" stroke-width="1.5" />
                        <path d="M10 6v4l2.5 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    Absensi
                </a>

                <a href="/internship/nilai"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('internship/nilai*') ? 'bg-white text-[#111827] font-semibold shadow-sm' : 'text-white/55 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">
                        <path d="M6 3h8l2 2v12H4V5l2-2Z" stroke="currentColor" stroke-width="1.5"
                            stroke-linejoin="round" />
                        <path d="M7 8h6M7 11h6M7 14h4" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" />
                    </svg>
                    Nilai Saya
                </a>

                <a href="/internship/laporan"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition
                    {{ request()->is('internship/laporan*') ? 'bg-white text-[#111827] font-semibold shadow-sm' : 'text-white/55 hover:bg-white/5 hover:text-white' }}">

                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">
                        <path d="M4 4h12v13l-3-2-3 2-3-2-3 2V4Z" stroke="currentColor" stroke-width="1.5"
                            stroke-linejoin="round" />
                        <path d="M7 8h6M7 11h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    Cetak Laporan
                </a>
            </nav>

            <div class="px-4 py-4 border-t border-white/10">
                <div class="flex items-center gap-3 px-2 py-2">
                    <div
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-400 to-yellow-600
                        flex items-center justify-center text-white text-sm font-semibold
                        flex-shrink-0 shadow-lg">
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
                        <div class="flex items-center gap-2">

                            @php
                                $sudahAbsenHariIni = $absensis->contains(function ($absensi) {
                                    return \Carbon\Carbon::parse($absensi->tanggal)->isToday();
                                });
                            @endphp

                            @if ($sudahAbsenHariIni)
                                <div
                                    class="inline-flex items-center gap-2 rounded-xl bg-slate-100 px-4 py-2 text-xs font-semibold text-slate-500">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>

                                    Anda sudah melakukan absensi hari ini
                                </div>
                            @else
                                <button type="button" id="open-absensi-modal"
                                    class="inline-flex items-center gap-2 rounded-xl bg-[#111827] px-4 py-2 text-xs font-semibold text-white transition hover:bg-slate-800">

                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>

                                    Absensi
                                </button>
                            @endif
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-[#111827]">
                                    <th
                                        class="rounded-tl-xl px-5 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Tanggal
                                    </th>

                                    <th
                                        class="px-5 py-4 text-left text-xs font-semibold text-white  uppercase tracking-wider whitespace-nowrap">
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
                                        class="px-5 py-4 text-left text-xs font-semibold text-white  uppercase tracking-wider whitespace-nowrap">
                                        Foto Pulang
                                    </th>

                                    <th
                                        class="px-5 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Status
                                    </th>

                                    <th
                                        class="rounded-tr-xl px-5 py-4 text-center text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-slate-100">

                                @forelse ($absensis as $absensi)
                                    <tr class="group hover:bg-slate-50 transition">
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

                                        <td class="px-5 py-4 whitespace-nowrap">

                                            @if ($absensi->jam_masuk)
                                                <div class="flex items-center gap-2">
                                                    <span class="w-2 h-2 rounded-full bg-emerald-500">
                                                    </span>

                                                    <span class="font-semibold text-emerald-700">
                                                        {{ $absensi->jam_masuk }}
                                                    </span>

                                                </div>
                                            @else
                                                <span class="text-slate-300">
                                                    -
                                                </span>
                                            @endif
                                        </td>

                                        <td class="px-5 py-4 whitespace-nowrap">

                                            @if ($absensi->foto_masuk)
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-medium">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5"
                                                            d="M3 7a2 2 0 012-2h2l1-1h10l1 1h2a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7Z" />
                                                        <circle cx="12" cy="12" r="3"
                                                            stroke="currentColor" stroke-width="1.5" />
                                                    </svg>
                                                    Tersedia
                                                </span>
                                            @else
                                                <span class="text-slate-300">
                                                    -
                                                </span>
                                            @endif
                                        </td>

                                        <td class="px-5 py-4 whitespace-nowrap">
                                            @if ($absensi->jam_pulang)
                                                <div class="flex items-center gap-2">
                                                    <span class="w-2 h-2 rounded-full bg-slate-400">
                                                    </span>
                                                    <span class="font-semibold text-slate-600">
                                                        {{ $absensi->jam_pulang }}
                                                    </span>
                                                </div>
                                            @else
                                                <span class="text-slate-300">
                                                    -
                                                </span>
                                            @endif

                                        </td>

                                        <td class="px-5 py-4 whitespace-nowrap">
                                            @if ($absensi->foto_pulang)
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg bg-slate-100 text-slate-600 text-xs font-medium">

                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5"
                                                            d="M3 7a2 2 0 012-2h2l1-1h10l1 1h2a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7Z" />
                                                        <circle cx="12" cy="12" r="3"
                                                            stroke="currentColor" stroke-width="1.5" />
                                                    </svg>
                                                    Tersedia
                                                </span>
                                            @else
                                                <span class="text-slate-300">
                                                    -
                                                </span>
                                            @endif
                                        </td>

                                        <td class="px-5 py-4 whitespace-nowrap">
                                            @if ($absensi->status === 'hadir')
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500">
                                                    </span>
                                                    Hadir
                                                </span>
                                            @elseif ($absensi->status === 'sakit')
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold bg-amber-50 text-amber-700">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500">
                                                    </span>
                                                    Sakit
                                                </span>
                                            @elseif ($absensi->status === 'izin')
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-700">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500">
                                                    </span>
                                                    Izin
                                                </span>
                                            @elseif ($absensi->status === 'alfa')
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold bg-red-50 text-red-700">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500">
                                                    </span>
                                                    Alfa
                                                </span>
                                            @endif
                                        </td>

                                        <td class="px-5 py-4 text-center whitespace-nowrap">
                                            @if ($absensi->jam_pulang)
                                                <div
                                                    class="inline-flex items-center gap-1.5 rounded-lg bg-slate-100 px-3 py-2 text-xs font-medium text-slate-500">

                                                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">

                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />

                                                    </svg>

                                                    Sudah Absen Pulang
                                                </div>
                                            @else
                                                <button type="button"
                                                    class="btn-detail-absensi inline-flex items-center gap-1.5 rounded-lg bg-[#111827] px-3 py-2 text-xs font-medium text-white transition-all duration-200 hover:-translate-y-0.5 hover:bg-slate-800"
                                                    data-id="{{ $absensi->id }}"
                                                    data-jam-pulang="{{ $absensi->jam_pulang ?? '' }}">

                                                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">

                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0Z" />

                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7Z" />

                                                    </svg>

                                                    Absen Pulang
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty

                                    <tr>
                                        <td colspan="7" class="px-5 py-16 text-center">
                                            <div class="flex flex-col items-center">
                                                <div
                                                    class="w-16 h-16 rounded-2xl
                                                    bg-slate-100
                                                    flex items-center justify-center
                                                    mb-4">

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


            {{-- MODAL ABSENSI --}}
            <div id="absensi-modal" class="fixed inset-0 z-50 hidden overflow-y-auto"
                aria-labelledby="absensi-modal-title" role="dialog" aria-modal="true">
                <div id="absensi-modal-overlay" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm"></div>
                <div class="relative flex min-h-screen items-center justify-center p-4">
                    <div class="relative w-full max-w-lg overflow-hidden rounded-2xl bg-white shadow-xl">
                        <div class="flex items-center justify-between border-b border-slate-200 px-6 py-4">
                            <div>
                                <h2 id="absensi-modal-title" class="text-lg font-bold text-slate-800">
                                    Absensi
                                </h2>

                                <p class="mt-1 text-xs text-slate-500">
                                    Lengkapi absensi masuk dan pulang Anda.
                                </p>
                            </div>

                            <button type="button" id="close-absensi-modal"
                                class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 transition hover:bg-slate-100 hover:text-slate-600">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <form id="absensi-form" action="/internship/tambah/absensi" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            <input type="hidden" id="tanggal" name="tanggal"
                                value="{{ now()->format('Y-m-d') }}">

                            <div class="space-y-6 px-6 py-5">
                                <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3">
                                    <p class="text-xs font-medium text-slate-500">
                                        Tanggal Absensi
                                    </p>

                                    <p id="tanggal-display" class="mt-1 text-sm font-semibold text-slate-800">
                                        {{ now()->translatedFormat('l, d F Y') }}
                                    </p>
                                </div>
                                <div class="rounded-2xl border border-slate-200 p-4">

                                    <div class="mb-4">
                                        <h3 class="text-sm font-bold text-slate-800">
                                            Absensi Masuk
                                        </h3>

                                        <p class="mt-1 text-xs text-slate-500">
                                            Ambil selfie sebagai bukti kehadiran masuk.
                                        </p>
                                    </div>

                                    <div class="mb-4">
                                        <label for="jam_masuk"
                                            class="mb-2 block text-sm font-semibold text-slate-700">
                                            Jam Masuk
                                        </label>

                                        <input type="time" id="jam_masuk" name="jam_masuk" value=""
                                            readonly
                                            class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-600 outline-none">
                                    </div>

                                    <div>
                                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                                            Foto Masuk
                                        </label>

                                        <div class="overflow-hidden rounded-xl border border-slate-200 bg-slate-50">
                                            <video id="camera-preview-masuk"
                                                class="hidden aspect-video w-full object-cover" autoplay
                                                playsinline></video>

                                            <canvas id="camera-canvas-masuk" class="hidden"></canvas>

                                            <img id="foto-preview-masuk"
                                                class="hidden aspect-video w-full object-cover"
                                                alt="Preview foto masuk">

                                            <div id="camera-placeholder-masuk"
                                                class="flex aspect-video flex-col items-center justify-center px-5 text-center">
                                                <div
                                                    class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100">
                                                    <svg class="h-6 w-6 text-slate-500" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 7h4l2-3h6l2 3h4a2 2 0 012 2v10a2 2 0 01-2 2H3a2 2 0 01-2-2V9a2 2 0 012-2z" />

                                                        <circle cx="12" cy="13" r="3"
                                                            stroke-width="2" />
                                                    </svg>
                                                </div>

                                                <p class="mt-3 text-sm font-medium text-slate-700">
                                                    Belum ada foto
                                                </p>

                                                <p class="mt-1 text-xs text-slate-400">
                                                    Pastikan wajah terlihat dengan jelas.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="mt-3 flex gap-2">
                                            <button type="button" id="start-camera-masuk"
                                                class="flex-1 rounded-xl bg-slate-900 px-4 py-2.5 text-xs font-semibold text-white transition hover:bg-slate-800">
                                                Buka Kamera
                                            </button>

                                            <button type="button" id="take-photo-masuk"
                                                class="hidden flex-1 rounded-xl bg-emerald-600 px-4 py-2.5 text-xs font-semibold text-white transition hover:bg-emerald-700">
                                                Ambil Foto
                                            </button>
                                        </div>

                                        <input type="file" id="foto_masuk" name="foto_masuk" accept="image/*"
                                            class="hidden">
                                    </div>
                                </div>

                                <div>
                                    <label for="status" class="mb-2 block text-sm font-semibold text-slate-700">
                                        Status Kehadiran
                                    </label>

                                    <select id="status" name="status"
                                        class="w-full rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm text-slate-700 outline-none transition focus:border-slate-400 focus:ring-2 focus:ring-slate-100">
                                        <option value="hadir">
                                            Hadir
                                        </option>

                                        <option value="sakit">
                                            Sakit
                                        </option>

                                        <option value="izin">
                                            Izin
                                        </option>

                                        <option value="alfa">
                                            Alfa
                                        </option>
                                    </select>
                                </div>

                            </div>

                            <div class="flex items-center justify-end gap-3 border-t border-slate-200 px-6 py-4">
                                <button type="button" id="cancel-absensi-modal"
                                    class="rounded-xl border border-slate-200 px-4 py-2.5 text-xs font-semibold text-slate-600 transition hover:bg-slate-50">
                                    Batal
                                </button>

                                <button type="submit" id="submit-absensi"
                                    class="rounded-xl bg-[#111827] px-5 py-2.5 text-xs font-semibold text-white transition hover:bg-slate-800">
                                    Simpan Absensi
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            {{-- MODAL ABSENSI PULANG --}}
            <div id="absensi-pulang-modal" class="fixed inset-0 z-50 hidden overflow-y-auto"
                aria-labelledby="absensi-pulang-modal-title" role="dialog" aria-modal="true">
                <div id="absensi-pulang-modal-overlay" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm">
                </div>

                <div class="relative flex min-h-screen items-center justify-center p-4">
                    <div class="relative w-full max-w-lg overflow-hidden rounded-2xl bg-white shadow-xl">
                        <div class="flex items-center justify-between border-b border-slate-200 px-6 py-4">

                            <div>
                                <h2 id="absensi-pulang-modal-title" class="text-lg font-bold text-slate-800">
                                    Absensi Pulang
                                </h2>

                                <p class="mt-1 text-xs text-slate-500">
                                    Ambil selfie sebagai bukti kehadiran pulang.
                                </p>
                            </div>

                            <button type="button" id="close-absensi-pulang-modal"
                                class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 transition hover:bg-slate-100 hover:text-slate-600">

                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <form id="absensi-pulang-form" method="POST" enctype="multipart/form-data">

                            @csrf

                            @method('PUT')

                            <div class="space-y-6 px-6 py-5">

                                <div class="rounded-2xl border border-slate-200 p-4">
                                    <div class="mb-4">

                                        <h3 class="text-sm font-bold text-slate-800">
                                            Absensi Pulang
                                        </h3>

                                        <p class="mt-1 text-xs text-slate-500">
                                            Ambil selfie sebagai bukti kehadiran pulang.
                                        </p>

                                    </div>

                                    <div class="mb-4">

                                        <label for="jam_pulang"
                                            class="mb-2 block text-sm font-semibold text-slate-700">
                                            Jam Pulang
                                        </label>

                                        <input type="time" id="jam_pulang" name="jam_pulang" value=""
                                            readonly
                                            class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-600 outline-none">

                                    </div>

                                    <div>

                                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                                            Foto Pulang
                                        </label>

                                        <div class="overflow-hidden rounded-xl border border-slate-200 bg-slate-50">

                                            <video id="camera-preview-pulang"
                                                class="hidden aspect-video w-full object-cover" autoplay playsinline>
                                            </video>

                                            <canvas id="camera-canvas-pulang" class="hidden">
                                            </canvas>

                                            <img id="foto-preview-pulang"
                                                class="hidden aspect-video w-full object-cover"
                                                alt="Preview foto pulang">

                                            <div id="camera-placeholder-pulang"
                                                class="flex aspect-video flex-col items-center justify-center px-5 text-center">

                                                <div
                                                    class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100">

                                                    <svg class="h-6 w-6 text-slate-500" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">

                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 7h4l2-3h6l2 3h4a2 2 0 012 2v10a2 2 0 01-2 2H3a2 2 0 01-2-2V9a2 2 0 012-2z" />

                                                        <circle cx="12" cy="13" r="3"
                                                            stroke-width="2" />

                                                    </svg>

                                                </div>

                                                <p class="mt-3 text-sm font-medium text-slate-700">
                                                    Belum ada foto
                                                </p>

                                                <p class="mt-1 text-xs text-slate-400">
                                                    Pastikan wajah terlihat dengan jelas.
                                                </p>

                                            </div>

                                        </div>

                                        <div class="mt-3 flex gap-2">

                                            <button type="button" id="start-camera-pulang"
                                                class="flex-1 rounded-xl bg-slate-900 px-4 py-2.5 text-xs font-semibold text-white transition hover:bg-slate-800">
                                                Buka Kamera
                                            </button>

                                            <button type="button" id="take-photo-pulang"
                                                class="hidden flex-1 rounded-xl bg-emerald-600 px-4 py-2.5 text-xs font-semibold text-white transition hover:bg-emerald-700">
                                                Ambil Foto
                                            </button>

                                        </div>

                                        <input type="file" id="foto_pulang" name="foto_pulang" accept="image/*"
                                            class="hidden">

                                    </div>

                                </div>

                            </div>

                            <div class="flex items-center justify-end gap-3 border-t border-slate-200 px-6 py-4">

                                <button type="button" id="cancel-absensi-pulang-modal"
                                    class="rounded-xl border border-slate-200 px-4 py-2.5 text-xs font-semibold text-slate-600 transition hover:bg-slate-50">
                                    Batal
                                </button>

                                <button type="submit" id="submit-absensi-pulang"
                                    class="rounded-xl bg-[#111827] px-5 py-2.5 text-xs font-semibold text-white transition hover:bg-slate-800">
                                    Simpan Absensi
                                </button>

                            </div>

                        </form>

                    </div>
                </div>
            </div>


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

    {{-- ================= ABSENSI MODAL SCRIPT ================= --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // =====================================================
            // MODAL ABSENSI MASUK
            // =====================================================
            const absensiModal = document.getElementById('absensi-modal');
            const absensiOverlay = document.getElementById('absensi-modal-overlay');
            const openAbsensiButton = document.getElementById('open-absensi-modal');
            const closeAbsensiButton = document.getElementById('close-absensi-modal');
            const cancelAbsensiButton = document.getElementById('cancel-absensi-modal');

            // =====================================================
            // MODAL ABSENSI PULANG
            // =====================================================
            const pulangModal = document.getElementById('absensi-pulang-modal');
            const pulangOverlay = document.getElementById('absensi-pulang-modal-overlay');
            const closePulangButton = document.getElementById('close-absensi-pulang-modal');
            const cancelPulangButton = document.getElementById('cancel-absensi-pulang-modal');
            const pulangForm = document.getElementById('absensi-pulang-form');

            // =====================================================
            // CAMERA MASUK
            // =====================================================
            const cameraMasuk = {
                stream: null,
                video: document.getElementById('camera-preview-masuk'),
                canvas: document.getElementById('camera-canvas-masuk'),
                preview: document.getElementById('foto-preview-masuk'),
                placeholder: document.getElementById('camera-placeholder-masuk'),
                startButton: document.getElementById('start-camera-masuk'),
                takeButton: document.getElementById('take-photo-masuk'),
                input: document.getElementById('foto_masuk'),
                timeInput: document.getElementById('jam_masuk')
            };

            // =====================================================
            // CAMERA PULANG
            // =====================================================
            const cameraPulang = {
                stream: null,
                video: document.getElementById('camera-preview-pulang'),
                canvas: document.getElementById('camera-canvas-pulang'),
                preview: document.getElementById('foto-preview-pulang'),
                placeholder: document.getElementById('camera-placeholder-pulang'),
                startButton: document.getElementById('start-camera-pulang'),
                takeButton: document.getElementById('take-photo-pulang'),
                input: document.getElementById('foto_pulang'),
                timeInput: document.getElementById('jam_pulang')
            };

            // =====================================================
            // WAKTU SEKARANG
            // =====================================================
            function getCurrentTime() {

                return new Date().toLocaleTimeString('en-GB', {
                    timeZone: 'Asia/Jakarta',
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                });

            }

            // =====================================================
            // BUKA MODAL MASUK
            // =====================================================
            openAbsensiButton?.addEventListener('click', function() {

                absensiModal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');

                cameraMasuk.timeInput.value = getCurrentTime();

            });

            // =====================================================
            // TUTUP MODAL MASUK
            // =====================================================
            function closeAbsensiModal() {

                stopCamera(cameraMasuk);

                absensiModal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');

            }

            closeAbsensiButton?.addEventListener('click', closeAbsensiModal);
            cancelAbsensiButton?.addEventListener('click', closeAbsensiModal);
            absensiOverlay?.addEventListener('click', closeAbsensiModal);

            // =====================================================
            // BUKA MODAL PULANG
            // =====================================================
            document.querySelectorAll('.btn-detail-absensi').forEach(function(button) {

                button.addEventListener('click', function() {

                    const absensiId = this.dataset.id;
                    const jamPulang = this.dataset.jamPulang;

                    // Set waktu pulang
                    cameraPulang.timeInput.value =
                        jamPulang || getCurrentTime();

                    // Set action form
                    pulangForm.action =
                        '/internship/absensi/' + absensiId + '/pulang';

                    pulangModal.classList.remove('hidden');
                    document.body.classList.add('overflow-hidden');

                });

            });

            // =====================================================
            // TUTUP MODAL PULANG
            // =====================================================
            function closePulangModal() {

                stopCamera(cameraPulang);

                pulangModal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');

                resetCamera(cameraPulang);

            }

            closePulangButton?.addEventListener('click', closePulangModal);
            cancelPulangButton?.addEventListener('click', closePulangModal);
            pulangOverlay?.addEventListener('click', closePulangModal);

            // =====================================================
            // SETUP CAMERA
            // =====================================================
            function setupCamera(camera) {

                camera.startButton?.addEventListener('click', async function() {

                    try {

                        stopCamera(camera);

                        camera.stream =
                            await navigator.mediaDevices.getUserMedia({
                                video: {
                                    facingMode: 'user'
                                },
                                audio: false
                            });

                        camera.video.srcObject = camera.stream;

                        camera.video.classList.remove('hidden');
                        camera.preview.classList.add('hidden');
                        camera.placeholder.classList.add('hidden');

                        camera.startButton.classList.add('hidden');
                        camera.takeButton.classList.remove('hidden');

                    } catch (error) {

                        console.error('Camera error:', error);

                        alert(
                            'Kamera tidak dapat diakses. Pastikan izin kamera sudah diberikan.'
                        );

                    }

                });

                camera.takeButton?.addEventListener('click', function() {

                    if (!camera.stream) {
                        return;
                    }

                    camera.canvas.width = camera.video.videoWidth;
                    camera.canvas.height = camera.video.videoHeight;

                    const context = camera.canvas.getContext('2d');

                    context.drawImage(
                        camera.video,
                        0,
                        0,
                        camera.canvas.width,
                        camera.canvas.height
                    );

                    const imageData =
                        camera.canvas.toDataURL('image/jpeg', 0.9);

                    camera.preview.src = imageData;

                    camera.preview.classList.remove('hidden');
                    camera.video.classList.add('hidden');
                    camera.placeholder.classList.add('hidden');

                    camera.canvas.toBlob(function(blob) {

                        const file = new File(
                            [blob],
                            'foto-absensi.jpg', {
                                type: 'image/jpeg'
                            }
                        );

                        const dataTransfer = new DataTransfer();

                        dataTransfer.items.add(file);

                        camera.input.files =
                            dataTransfer.files;

                    }, 'image/jpeg', 0.9);

                    stopCamera(camera);

                    camera.startButton.textContent = 'Ambil Ulang Foto';
                    camera.startButton.classList.remove('hidden');
                    camera.takeButton.classList.add('hidden');

                    camera.timeInput.value = getCurrentTime();

                });

            }

            // =====================================================
            // STOP CAMERA
            // =====================================================
            function stopCamera(camera) {

                if (camera.stream) {

                    camera.stream.getTracks().forEach(function(track) {
                        track.stop();
                    });

                    camera.stream = null;

                }

                if (camera.video) {
                    camera.video.srcObject = null;
                }

            }

            // =====================================================
            // RESET CAMERA
            // =====================================================
            function resetCamera(camera) {

                stopCamera(camera);

                camera.video.classList.add('hidden');
                camera.preview.classList.add('hidden');
                camera.placeholder.classList.remove('hidden');

                camera.startButton.classList.remove('hidden');
                camera.takeButton.classList.add('hidden');

                camera.startButton.textContent = 'Buka Kamera';

                camera.preview.src = '';
                camera.input.value = '';

            }

            // =====================================================
            // INIT CAMERA
            // =====================================================
            setupCamera(cameraMasuk);
            setupCamera(cameraPulang);

            // =====================================================
            // ESCAPE
            // =====================================================
            document.addEventListener('keydown', function(event) {

                if (event.key !== 'Escape') {
                    return;
                }

                if (!absensiModal.classList.contains('hidden')) {
                    closeAbsensiModal();
                }

                if (!pulangModal.classList.contains('hidden')) {
                    closePulangModal();
                }

            });

        });
    </script>

</body>

</html>
