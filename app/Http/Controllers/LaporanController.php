<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Nilai;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;


class LaporanController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $absensis = Absensi::where('user_id', $userId)
            ->orderBy('tanggal', 'asc')
            ->get();

        $jumlahHadir = $absensis->where('status', 'hadir')->count();
        $jumlahSakit = $absensis->where('status', 'sakit')->count();
        $jumlahIzin  = $absensis->where('status', 'izin')->count();
        $jumlahAlfa  = $absensis->where('status', 'alfa')->count();

        $nilai = Nilai::where('user_id', $userId)->first();

        return view('internship.laporan.index', compact(
            'absensis',
            'jumlahHadir',
            'jumlahSakit',
            'jumlahIzin',
            'jumlahAlfa',
            'nilai'
        ));
    }

    public function PdfInternship()
    {
        $user = auth()->user();

        $absensis = Absensi::where('user_id', $user->id)
            ->orderBy('tanggal', 'desc')
            ->get();

        $jumlahHadir = $absensis->where('status', 'hadir')->count();
        $jumlahSakit = $absensis->where('status', 'sakit')->count();
        $jumlahIzin = $absensis->where('status', 'izin')->count();
        $jumlahAlfa = $absensis->where('status', 'alfa')->count();

        $nilai = Nilai::where('user_id', $user->id)->first();

        $pdf = Pdf::loadView('internship.laporan.pdf.index', compact(
            'user',
            'absensis',
            'jumlahHadir',
            'jumlahSakit',
            'jumlahIzin',
            'jumlahAlfa',
            'nilai'
        ));

        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream('internship.laporan.pdf.index');
    }

    public function admin()
    {

        $internships = User::where('role', 'internship')
            ->orderBy('name', 'asc')
            ->get();

        $totalInternship = $internships->count();

        $internshipAktif = $internships
            ->where('is_active', true)
            ->count();

        $hadirHariIni = Absensi::whereDate('tanggal', now())
            ->where('status', 'hadir')
            ->count();

        $belumAbsen = max($internshipAktif - $hadirHariIni, 0);

        $jumlahHadir = Absensi::where('status', 'hadir')->count();

        $jumlahSakit = Absensi::where('status', 'sakit')->count();

        $jumlahIzin = Absensi::where('status', 'izin')->count();

        $jumlahAlfa = Absensi::where('status', 'alfa')->count();

        return view('admin.laporan.index', compact(
            'totalInternship',
            'internshipAktif',
            'hadirHariIni',
            'belumAbsen',
            'jumlahHadir',
            'jumlahSakit',
            'jumlahIzin',
            'jumlahAlfa',
            'internships'
        ));
    }

    public function PdfAdmin($id)
    {

        $user = User::findOrFail($id);

        $absensis = Absensi::where('user_id', $id)
            ->orderBy('tanggal', 'desc')
            ->get();

        $jumlahHadir = $absensis
            ->where('status', 'hadir')
            ->count();

        $jumlahSakit = $absensis
            ->where('status', 'sakit')
            ->count();

        $jumlahIzin = $absensis
            ->where('status', 'izin')
            ->count();

        $jumlahAlfa = $absensis
            ->where('status', 'alfa')
            ->count();

        $nilai = Nilai::where('user_id', $id)
            ->first();

        $pdf = Pdf::loadView(
            'admin.laporan.pdf.index',
            compact(
                'user',
                'absensis',
                'jumlahHadir',
                'jumlahSakit',
                'jumlahIzin',
                'jumlahAlfa',
                'nilai'
            )
        );

        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream(
            'Laporan-Internship-' . $user->name . '.pdf'
        );
    }
}
