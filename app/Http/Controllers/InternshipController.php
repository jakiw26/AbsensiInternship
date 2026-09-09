<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class InternshipController extends Controller
{
    public function index(Request $request)
    {
        $query = User::where('role', 'internship');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status === 'aktif');
        }

        $internships = $query->orderBy('name', 'asc')
            ->paginate(10)
            ->withQueryString();

        $totalInternship = User::where('role', 'internship')->count();
        $internshipAktif = User::where('role', 'internship')->where('is_active', true)->count();
        $internshipTidakAktif = User::where('role', 'internship')->where('is_active', false)->count();

        return view('admin.internship.index', compact(
            'internships',
            'totalInternship',
            'internshipAktif',
            'internshipTidakAktif'
        ));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($user->role !== 'internship') {
            abort(404);
        }

        $request->validate([
            'is_active' => 'required|in:1,0',
        ]);

        $user->update([
            'is_active' => $request->is_active,
        ]);

        return back()->with('success', 'Status internship berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->role !== 'internship') {
            return back()->with('error', 'Data tidak ditemukan.');
        }

        $user->delete();

        return back()->with('success', 'Data internship berhasil dihapus.');
    }
}
