<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfilController extends Controller
{
    public function internship()
    {
        return view('internship.profil.internship');
    }

    public function admin()
    {
        return view('admin.profil.index');
    }

    public function createOrUpdate(Request $request)
    {
        $user = auth()->user();

        // Validasi
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'email'   => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'no_hp'   => ['nullable', 'string', 'max:20'],
            'alamat'  => ['nullable', 'string', 'max:1000'],
            'foto'    => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);

        // Update data di tabel users
        $user->update([
            'name'  => $validated['name'],
            'email' => $validated['email'],
        ]);

        // Siapkan data untuk tabel profil
        $profilData = [
            'no_hp'  => $validated['no_hp'] ?? null,
            'alamat' => $validated['alamat'] ?? null,
        ];

        // Handle upload foto (kalau ada file baru)
        if ($request->hasFile('foto')) {

            // Hapus foto lama kalau ada
            if ($user->profil?->foto && Storage::disk('public')->exists($user->profil->foto)) {
                Storage::disk('public')->delete($user->profil->foto);
            }

            $path = $request->file('foto')->store('profil', 'public');
            $profilData['foto'] = $path;
        }

        // Create kalau belum punya profil, update kalau sudah ada
        $user->profil()->updateOrCreate(
            ['user_id' => $user->id],
            $profilData
        );

        return redirect()
            ->back()
            ->with('success', 'Profil berhasil diperbarui.');
    }
}
