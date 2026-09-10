<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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

        $tanggalDaftar = $user->created_at ? $user->created_at->copy()->startOfDay() : null;
        if ($user->role === 'internship' && !$sudahAbsenKemarin && !$tanggalKemarin->isWeekend() && $tanggalDaftar && $tanggalDaftar->lte($tanggalKemarin)) {
            Absensi::create(['user_id' => $userId, 'tanggal' => $tanggalKemarin, 'status' => 'alfa',]);
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
            'jam_masuk' => 'nullable|date_format:H:i',
            'foto_masuk' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $sudahAbsen = Absensi::where('user_id', auth()->id())
            ->whereDate('tanggal', $request->tanggal)
            ->exists();

        if ($sudahAbsen) {
            return redirect('/internship/absensi')
                ->with('error', 'Anda sudah melakukan absensi hari ini.');
        }

        if ($request->status === 'hadir') {
            if (!$request->jam_masuk) {
                return redirect('/internship/absensi')->with('error', 'Jam masuk wajib diisi untuk status hadir.');
            }
            if (!$request->hasFile('foto_masuk')) {
                return redirect('/internship/absensi')->with('error', 'Foto masuk wajib diambil untuk status hadir.');
            }
        }

        $fotoMasuk = null;
        if ($request->hasFile('foto_masuk')) {
            $fotoMasuk = $request->file('foto_masuk')->store('absensi/masuk', 'public');
        }

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

    public function updateStatus(Request $request, $id)
    {
        $absensi = Absensi::findOrFail($id);

        $validated = $request->validate([
            'status' => ['required', Rule::in(['hadir', 'sakit', 'izin', 'alfa'])],
        ]);

        $absensi->update([
            'status' => $validated['status'],
        ]);

        return redirect()
            ->back()
            ->with('success', 'Status absensi ' . $absensi->user->name . ' berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);
        $nama = $absensi->user->name ?? '-';

        if ($absensi->foto_masuk && Storage::disk('public')->exists($absensi->foto_masuk)) {
            Storage::disk('public')->delete($absensi->foto_masuk);
        }

        if ($absensi->foto_pulang && Storage::disk('public')->exists($absensi->foto_pulang)) {
            Storage::disk('public')->delete($absensi->foto_pulang);
        }

        $absensi->delete();

        return redirect()
            ->back()
            ->with('success', 'Data absensi ' . $nama . ' berhasil dihapus.');
    }
}
