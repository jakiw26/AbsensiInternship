<?php

namespace App\Http\Controllers;

use App\Models\Absensi;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $userId = $user->id;

        $tanggalKemarin = today()->subDay();

        $sudahAbsenKemarin = Absensi::where('user_id', $userId)
            ->whereDate('tanggal', $tanggalKemarin)
            ->exists();

        if (
            $user->role === 'internship' &&
            !$sudahAbsenKemarin &&
            !$tanggalKemarin->isWeekend()
        ) {
            Absensi::create([
                'user_id' => $userId,
                'tanggal' => $tanggalKemarin,
                'status' => 'alfa',
            ]);
        }

        $absensis = Absensi::where('user_id', $userId)
            ->orderBy('tanggal', 'desc')
            ->get();

        $sudahAbsenHariIni = Absensi::where('user_id', $userId)
            ->whereDate('tanggal', today())
            ->exists();

        $jumlahHadir = $absensis->where('status', 'hadir')->count();
        $jumlahSakit = $absensis->where('status', 'sakit')->count();
        $jumlahIzin = $absensis->where('status', 'izin')->count();
        $jumlahAlfa = $absensis->where('status', 'alfa')->count();

        return view('internship.absensi.index', compact(
            'absensis',
            'sudahAbsenHariIni',
            'jumlahHadir',
            'jumlahSakit',
            'jumlahIzin',
            'jumlahAlfa'
        ));
    }
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jam_masuk' => 'required|date_format:H:i',
            'foto_masuk' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:hadir,sakit,izin,alfa',
        ]);

        $sudahAbsen = Absensi::where('user_id', auth()->id())
            ->whereDate('tanggal', $request->tanggal)
            ->exists();

        if ($sudahAbsen) {
            return redirect('/internship/absensi')
                ->with('error', 'Anda sudah melakukan absensi hari ini.');
        }

        $fotoMasuk = $request->file('foto_masuk')
            ->store('absensi/masuk', 'public');

        Absensi::create([
            'user_id' => auth()->id(),
            'tanggal' => $request->tanggal,
            'jam_masuk' => $request->jam_masuk,
            'foto_masuk' => $fotoMasuk,
            'status' => $request->status,
        ]);

        return redirect('/internship/absensi')->with('success', 'Absensi masuk berhasil disimpan.');
    }

    public function pulang(Request $request, $id)
    {
        $request->validate([
            'jam_pulang' => 'required|date_format:H:i',
            'foto_pulang' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $absensi = Absensi::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();
        if ($absensi->jam_pulang !== null) {
            return redirect('/internship/absensi')
                ->with('error', 'Anda sudah melakukan absensi pulang hari ini.');
        }
        $fotoPulang = $request->file('foto_pulang')
            ->store('absensi/pulang', 'public');

        $absensi->update([
            'jam_pulang' => $request->jam_pulang,
            'foto_pulang' => $fotoPulang,
        ]);

        return redirect('/internship/absensi')->with('success', 'Absensi pulang berhasil disimpan.');
    }

    public function admin()
    {
        $absensis = Absensi::all();
        return view('admin.absensi.index', compact('absensis'));
    }
}
