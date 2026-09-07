<?php

namespace App\Http\Controllers;

use App\Models\Absensi;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function internship()
    {
        $absensis = Absensi::where('user_id', auth()->id())
            ->orderBy('tanggal', 'desc')
            ->get();

        $jumlahHadir = $absensis->where('status', 'hadir')->count();
        $jumlahSakit = $absensis->where('status', 'sakit')->count();
        $jumlahIzin = $absensis->where('status', 'izin')->count();
        $jumlahAlfa = $absensis->where('status', 'alfa')->count();

        $sudahAbsenHariIni = Absensi::where('user_id', auth()->id())->whereDate('tanggal', today())->exists();

        return view('internship.dashboard', compact( 'absensis', 'jumlahHadir', 'jumlahSakit', 'jumlahIzin', 'jumlahAlfa', 'sudahAbsenHariIni' ));
    }
}
