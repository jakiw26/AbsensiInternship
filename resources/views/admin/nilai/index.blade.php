<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Nilai Internship</title>

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

            <div class="flex items-center gap-3 px-6 py-6 border-b border-white/10">

                <div class="w-10 h-10 rounded-xl overflow-hidden bg-white flex-shrink-0 shadow-sm">
                    <img src="{{ asset('images/bts.png') }}" alt="Logo" class="w-full h-full object-contain">
                </div>

                <div>
                    <p class="font-serif text-lg leading-tight text-white">Absensi</p>
                    <p class="text-xs text-white/40">Admin Panel</p>
                </div>

            </div>


            <nav class="flex-1 px-4 py-6 space-y-1.5">

                <a href="/admin/dashboard"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition text-white/55 hover:bg-white/5 hover:text-white">

                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 20" fill="none">
                        <path d="M3 10.5 10 4l7 6.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M5 9v7h10V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Dashboard
                </a>

                <a href="/admin/internship"
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition text-white/55 hover:bg-white/5 hover:text-white">

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
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition text-white/55 hover:bg-white/5 hover:text-white">

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
                    class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm transition text-white/55 hover:bg-white/5 hover:text-white">

                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                        <path d="M5 3h14v18H5z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        <path d="M8 8h8M8 12h8M8 16h5" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" />
                    </svg>
                    Laporan
                </a>

            </nav>


            <div class="px-4 py-4 border-t border-white/10">

                <div class="flex items-center gap-3 px-2 py-2">

                    <div
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-400 to-yellow-600
                        flex items-center justify-center text-white text-sm font-semibold flex-shrink-0 shadow-lg">
                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                    </div>

                    <div class="min-w-0">
                        <p class="text-sm font-medium text-white truncate">{{ auth()->user()->name ?? 'Administrator' }}
                        </p>
                        <p class="text-xs text-white/40 truncate">{{ auth()->user()->email ?? '-' }}</p>
                    </div>

                </div>

            </div>

        </aside>


        <div id="overlay" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-30 hidden md:hidden"></div>


        {{-- =====================================================
            MAIN
        ====================================================== --}}
        <div class="flex-1 md:ml-64 min-w-0">

            {{-- HEADER --}}
            <header
                class="sticky top-0 z-20 bg-white/95 backdrop-blur border-b border-slate-200
                px-4 md:px-8 py-4 flex items-center justify-between">

                <div class="flex items-center gap-4">

                    <button id="btn-toggle-sidebar"
                        class="md:hidden w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-700 hover:bg-slate-200 transition">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />
                        </svg>
                    </button>

                    <div>
                        <p class="text-xs font-medium text-slate-400 uppercase tracking-wider">Manajemen Internship</p>
                        <h2 class="font-serif text-xl md:text-2xl text-slate-900 mt-0.5">Kelola Nilai</h2>
                        <p class="text-xs md:text-sm text-slate-400 mt-1">Beri dan pantau penilaian seluruh peserta
                            internship.</p>
                    </div>

                </div>


                <div class="relative">

                    <button type="button" id="profile-menu-button"
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-400 to-yellow-600
                        flex items-center justify-center text-white text-sm font-semibold hover:scale-105 transition shadow-sm">
                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                    </button>

                    <div id="profile-menu"
                        class="hidden absolute right-0 mt-3 w-60 rounded-2xl bg-white shadow-xl shadow-slate-200/70
                        border border-slate-100 overflow-hidden z-50">

                        <div class="px-4 py-4 bg-slate-50 border-b border-slate-100">
                            <p class="text-sm font-semibold text-slate-800">
                                {{ auth()->user()->name ?? 'Administrator' }}</p>
                            <p class="text-xs text-slate-400 truncate mt-1">{{ auth()->user()->email ?? '-' }}</p>
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
                            <span>Profil Saya</span>
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
                                <span>Logout</span>
                            </button>
                        </form>

                    </div>

                </div>

            </header>


            {{-- CONTENT --}}
            <main class="p-4 md:p-8 space-y-8">

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
                    RINGKASAN
                ================================================== --}}
                <section>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

                        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-xs font-medium text-slate-400">Total Internship</p>
                                    <p class="mt-2 font-serif text-3xl text-slate-700">{{ $totalInternship }}</p>
                                </div>
                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-slate-100">
                                    <svg class="h-5 w-5 text-slate-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-9a4 4 0 110 8 4 4 0 010-8zm6 4a3 3 0 11-6 0" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-xs font-medium text-slate-400">Sudah Dinilai</p>
                                    <p class="mt-2 font-serif text-3xl text-emerald-600">{{ $sudahDinilai }}</p>
                                </div>
                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50">
                                    <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-xs font-medium text-slate-400">Belum Dinilai</p>
                                    <p class="mt-2 font-serif text-3xl text-amber-500">{{ $belumDinilai }}</p>
                                </div>
                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50">
                                    <svg class="h-5 w-5 text-amber-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>


                {{-- =================================================
                    TABEL NILAI INTERNSHIP
                ================================================== --}}
                <section class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">

                    <div
                        class="px-5 md:px-6 py-5 border-b border-slate-100 flex flex-col md:flex-row md:items-center md:justify-between gap-3">

                        <div>
                            <h2 class="text-base font-semibold text-slate-800">Daftar Penilaian</h2>
                            <p class="text-xs text-slate-400 mt-1">Klik "Beri Nilai" untuk menilai atau memperbarui
                                nilai peserta.</p>
                        </div>

                        <form method="GET" action="/admin/nilai" class="w-full md:w-64">

                            <div class="relative">

                                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                                </svg>

                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Cari nama atau email..."
                                    class="w-full pl-9 pr-3 py-2.5 text-sm rounded-xl border border-slate-200
                                    focus:outline-none focus:ring-2 focus:ring-slate-800/10 focus:border-slate-400">

                            </div>

                        </form>

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
                                        class="px-5 py-4 text-center text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Kedisiplinan
                                    </th>

                                    <th
                                        class="px-5 py-4 text-center text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Keterampilan
                                    </th>

                                    <th
                                        class="px-5 py-4 text-center text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Skill
                                    </th>

                                    <th
                                        class="px-5 py-4 text-center text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Status
                                    </th>

                                    <th
                                        class="rounded-tr-xl px-5 py-4 text-right text-xs font-semibold text-white uppercase tracking-wider whitespace-nowrap">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>


                            <tbody class="divide-y divide-slate-100">

                                @forelse ($internships as $user)
                                    <tr class="hover:bg-slate-50/70 transition">

                                        <td class="px-5 py-4 whitespace-nowrap">

                                            <div class="flex items-center gap-3">

                                                <div
                                                    class="w-9 h-9 rounded-full bg-slate-100
                                                    flex items-center justify-center text-xs font-semibold text-slate-500">
                                                    {{ strtoupper(substr($user->name ?? 'U', 0, 1)) }}
                                                </div>

                                                <div>
                                                    <p class="font-medium text-slate-700">{{ $user->name }}</p>
                                                    <p class="text-xs text-slate-400">{{ $user->email }}</p>
                                                </div>

                                            </div>

                                        </td>

                                        <td class="px-5 py-4 text-center">
                                            <span
                                                class="inline-flex min-w-12 items-center justify-center rounded-lg bg-amber-50
                                                px-3 py-1.5 text-sm font-bold text-amber-700">
                                                {{ $user->nilai->kedisiplinan ?? '-' }}
                                            </span>
                                        </td>

                                        <td class="px-5 py-4 text-center">
                                            <span
                                                class="inline-flex min-w-12 items-center justify-center rounded-lg bg-blue-50
                                                px-3 py-1.5 text-sm font-bold text-blue-700">
                                                {{ $user->nilai->keterampilan ?? '-' }}
                                            </span>
                                        </td>

                                        <td class="px-5 py-4 text-center">
                                            <span
                                                class="inline-flex min-w-12 items-center justify-center rounded-lg bg-emerald-50
                                                px-3 py-1.5 text-sm font-bold text-emerald-700">
                                                {{ $user->nilai->skill ?? '-' }}
                                            </span>
                                        </td>

                                        <td class="px-5 py-4 text-center whitespace-nowrap">

                                            @if ($user->nilai)
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-600">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                                    Sudah Dinilai
                                                </span>
                                            @else
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-medium bg-amber-50 text-amber-600">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                                    Belum Dinilai
                                                </span>
                                            @endif

                                        </td>

                                        <td class="px-5 py-4 text-right whitespace-nowrap">

                                            <button type="button"
                                                onclick="openNilaiModal(
                                                    '{{ $user->id }}',
                                                    '{{ $user->name }}',
                                                    {{ $user->nilai->kedisiplinan ?? 'null' }},
                                                    {{ $user->nilai->keterampilan ?? 'null' }},
                                                    {{ $user->nilai->skill ?? 'null' }}
                                                )"
                                                class="inline-flex items-center gap-1.5 px-3 py-2 rounded-xl bg-slate-900 text-white
                                                text-xs font-medium hover:bg-slate-800 transition">

                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>

                                                {{ $user->nilai ? 'Edit Nilai' : 'Beri Nilai' }}

                                            </button>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="6" class="px-5 py-16 text-center">

                                            <div class="flex flex-col items-center">

                                                <div
                                                    class="w-16 h-16 rounded-2xl bg-slate-100 flex items-center justify-center mb-4">
                                                    <svg class="w-8 h-8 text-slate-300" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5"
                                                            d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2m18 0v-2a4 4 0 00-3-3.87M13 7a4 4 0 11-8 0 4 4 0 018 0zm6 4a3 3 0 11-6 0" />
                                                    </svg>
                                                </div>

                                                <p class="text-sm font-semibold text-slate-600">Tidak ada data
                                                    internship</p>
                                                <p class="text-xs text-slate-400 mt-1">Data akan muncul di sini setelah
                                                    ditambahkan.</p>

                                            </div>

                                        </td>

                                    </tr>
                                @endforelse

                            </tbody>

                        </table>

                    </div>


                    @if ($internships->hasPages())
                        <div class="px-5 py-4 border-t border-slate-100">
                            {{ $internships->links() }}
                        </div>
                    @endif

                </section>

            </main>

        </div>

    </div>


    {{-- =====================================================
        MODAL BERI / EDIT NILAI
    ====================================================== --}}
    <div id="nilai-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4">

        <div id="nilai-modal-backdrop" class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>

        <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-md p-6">

            <div class="flex items-center gap-3 mb-6">

                <div class="w-11 h-11 rounded-xl bg-slate-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9 12h6m-6 4h4m-6 5h10a2 2 0 002-2V7.828a2 2 0 00-.586-1.414l-3.828-3.828A2 2 0 0013.172 2H7a2 2 0 00-2 2v15a2 2 0 002 2Z" />
                    </svg>
                </div>

                <div>
                    <h3 class="text-base font-semibold text-slate-800">Beri Penilaian</h3>
                    <p id="nilai-modal-name" class="text-xs text-slate-400">-</p>
                </div>

            </div>


            <form id="nilai-modal-form" method="POST" action="">

                @csrf
                @method('PUT')

                <div class="space-y-4 mb-6">

                    {{-- Kedisiplinan --}}
                    <div>
                        <label class="flex items-center justify-between text-sm font-medium text-slate-700 mb-2">
                            <span>Kedisiplinan</span>
                            <span class="text-xs text-slate-400">0 - 100</span>
                        </label>

                        <input type="number" name="kedisiplinan" id="nilai-kedisiplinan" min="0"
                            max="100" required
                            class="w-full px-4 py-2.5 text-sm rounded-xl border border-slate-200
                            focus:outline-none focus:ring-2 focus:ring-amber-400/20 focus:border-amber-400">
                    </div>

                    {{-- Keterampilan --}}
                    <div>
                        <label class="flex items-center justify-between text-sm font-medium text-slate-700 mb-2">
                            <span>Keterampilan</span>
                            <span class="text-xs text-slate-400">0 - 100</span>
                        </label>

                        <input type="number" name="keterampilan" id="nilai-keterampilan" min="0"
                            max="100" required
                            class="w-full px-4 py-2.5 text-sm rounded-xl border border-slate-200
                            focus:outline-none focus:ring-2 focus:ring-blue-400/20 focus:border-blue-400">
                    </div>

                    {{-- Skill --}}
                    <div>
                        <label class="flex items-center justify-between text-sm font-medium text-slate-700 mb-2">
                            <span>Skill</span>
                            <span class="text-xs text-slate-400">0 - 100</span>
                        </label>

                        <input type="number" name="skill" id="nilai-skill" min="0" max="100"
                            required
                            class="w-full px-4 py-2.5 text-sm rounded-xl border border-slate-200
                            focus:outline-none focus:ring-2 focus:ring-emerald-400/20 focus:border-emerald-400">
                    </div>

                </div>


                <div class="flex gap-3">

                    <button type="button" onclick="closeNilaiModal()"
                        class="flex-1 px-4 py-2.5 rounded-xl border border-slate-200 text-slate-600
                        text-sm font-medium hover:bg-slate-50 transition">
                        Batal
                    </button>

                    <button type="submit"
                        class="flex-1 px-4 py-2.5 rounded-xl bg-slate-900 text-white
                        text-sm font-medium hover:bg-slate-800 transition">
                        Simpan Nilai
                    </button>

                </div>

            </form>

        </div>

    </div>


    {{-- =====================================================
        SCRIPTS
    ====================================================== --}}
    <script>
        const profileButton = document.getElementById('profile-menu-button');
        const profileMenu = document.getElementById('profile-menu');

        profileButton.addEventListener('click', function(event) {
            event.stopPropagation();
            profileMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            if (!profileButton.contains(event.target) && !profileMenu.contains(event.target)) {
                profileMenu.classList.add('hidden');
            }
        });
    </script>

    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const btnToggle = document.getElementById('btn-toggle-sidebar');

        btnToggle.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });
    </script>

    <script>
        function openNilaiModal(userId, userName, kedisiplinan, keterampilan, skill) {
            const form = document.getElementById('nilai-modal-form');
            form.action = `/admin/nilai/${userId}`;

            document.getElementById('nilai-modal-name').textContent = userName;

            document.getElementById('nilai-kedisiplinan').value = kedisiplinan ?? '';
            document.getElementById('nilai-keterampilan').value = keterampilan ?? '';
            document.getElementById('nilai-skill').value = skill ?? '';

            document.getElementById('nilai-modal').classList.remove('hidden');
        }

        function closeNilaiModal() {
            document.getElementById('nilai-modal').classList.add('hidden');
        }

        document.getElementById('nilai-modal-backdrop').addEventListener('click', closeNilaiModal);

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeNilaiModal();
        });
    </script>

</body>

</html>
