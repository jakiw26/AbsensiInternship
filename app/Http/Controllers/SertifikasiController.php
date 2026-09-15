<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikasi;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\User;

class SertifikasiController extends Controller
{
    public function admin()
    {
        $internships = User::where('role', 'internship')
            ->with('sertifikasis')
            ->orderBy('name', 'asc')
            ->get();

        $totalInternship = $internships->count();

        $sudahBersertifikat = $internships
            ->filter(fn($user) => $user->sertifikasis->isNotEmpty())
            ->count();

        $belumBersertifikat = $totalInternship - $sudahBersertifikat;

        return view('admin.sertifikasi.index', compact(
            'internships',
            'totalInternship',
            'sudahBersertifikat',
            'belumBersertifikat'
        ));
    }

    public function store(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'tanggal_mulai' => ['required', 'date'],
            'tanggal_selesai' => ['required', 'date', 'after_or_equal:tanggal_mulai'],
        ]);

        $user = User::findOrFail($id);

        Sertifikasi::create([
            'user_id' => $user->id,
            'nama' => $validated['nama'],
            'tanggal_mulai' => $validated['tanggal_mulai'],
            'tanggal_selesai' => $validated['tanggal_selesai'],
        ]);

        return redirect('/admin/sertifikasi')->with('success', 'Data sertifikat berhasil disimpan.');
    }

    public function AdminPdf($id)
    {
        $sertifikasi = Sertifikasi::findOrFail($id);

        $pdf = Pdf::loadView(
            'admin.sertifikasi.pdf.index',
            compact('sertifikasi')
        );

        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream(
            'sertifikat-' . $sertifikasi->nama . '.pdf'
        );
    }

    public function internship()
    {
        $sertifikasi = Sertifikasi::where('user_id', auth()->id())->first();

        return view('internship.sertifikasi.index', compact('sertifikasi'));
    }

    public function pdfInternship($id)
    {
        $sertifikasi = Sertifikasi::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $pdf = Pdf::loadView(
            'internship.sertifikasi.pdf.index',
            compact('sertifikasi')
        );

        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream(
            'sertifikat-' . $sertifikasi->nama . '.pdf'
        );
    }
}
