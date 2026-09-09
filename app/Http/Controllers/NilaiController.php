<?php

namespace App\Http\Controllers;

use App\Models\Nilai;

use Illuminate\Http\Request;
use App\Models\User;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::where('user_id', auth()->id())->first();
        return view('internship.nilai.index', compact('nilai'));
    }

    public function admin(Request $request)
    {
        $query = User::where('role', 'internship')->with('nilai');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $internships = $query->orderBy('name', 'asc')
            ->paginate(10)
            ->withQueryString();

        $totalInternship = User::where('role', 'internship')->count();
        $sudahDinilai = User::where('role', 'internship')->whereHas('nilai')->count();
        $belumDinilai = $totalInternship - $sudahDinilai;

        return view('admin.nilai.index', compact(
            'internships',
            'totalInternship',
            'sudahDinilai',
            'belumDinilai'
        ));
    }

    public function update(Request $request, $id)
    {
        $user = User::where('role', 'internship')->findOrFail($id);

        $validated = $request->validate([
            'kedisiplinan' => 'required|integer|min:0|max:100',
            'keterampilan' => 'required|integer|min:0|max:100',
            'skill'        => 'required|integer|min:0|max:100',
        ]);

        Nilai::updateOrCreate(
            ['user_id' => $user->id],
            $validated
        );

        return back()->with('success', 'Nilai berhasil disimpan untuk ' . $user->name . '.');
    }
}
