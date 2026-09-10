<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\User;
use App\Models\Nilai;
use App\Models\Laporan;
use App\Models\Profil;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function internship()
    {

        $userId = auth()->id();

        $absensis = Absensi::where('user_id', $userId)
            ->whereDate('tanggal', today())
            ->orderBy('tanggal', 'desc')
            ->get();

        $semuaAbsensi = Absensi::where('user_id', $userId)
            ->get();

        $jumlahHadir = $semuaAbsensi
            ->where('status', 'hadir')
            ->count();

        $jumlahSakit = $semuaAbsensi
            ->where('status', 'sakit')
            ->count();

        $jumlahIzin = $semuaAbsensi
            ->where('status', 'izin')
            ->count();

        $jumlahAlfa = $semuaAbsensi
            ->where('status', 'alfa')
            ->count();

        $sudahAbsenHariIni = Absensi::where('user_id', $userId)
            ->whereDate('tanggal', today())
            ->exists();

        $nilai = Nilai::where('user_id', $userId)->first();

        return view('internship.dashboard', compact('absensis', 'jumlahHadir', 'jumlahSakit', 'jumlahIzin', 'jumlahAlfa', 'sudahAbsenHariIni', 'userId', 'nilai'));
    }

    public function admin()
    {
        $absensisHariIni = Absensi::with('user')
            ->whereDate('tanggal', today())
            ->orderBy('jam_masuk', 'asc')
            ->get();

        $totalInternship = User::where('role', 'internship')->count();

        $hadirHariIni = Absensi::whereDate('tanggal', today())
            ->where('status', 'hadir')
            ->count();

        $sakitHariIni = Absensi::whereDate('tanggal', today())
            ->where('status', 'sakit')
            ->count();

        $izinHariIni = Absensi::whereDate('tanggal', today())
            ->where('status', 'izin')
            ->count();

        $alfaHariIni = Absensi::whereDate('tanggal', today())
            ->where('status', 'alfa')
            ->count();

        $internshipAktif = User::where('role', 'internship')
            ->where('is_active', true)
            ->count();

        $internshipTidakAktif = User::where('role', 'internship')
            ->where('is_active', false)
            ->count();

        return view('admin.dashboard', compact(
            'totalInternship',
            'hadirHariIni',
            'sakitHariIni',
            'izinHariIni',
            'alfaHariIni',
            'absensisHariIni',
            'internshipAktif',
            'internshipTidakAktif'
        ));
    }
}
