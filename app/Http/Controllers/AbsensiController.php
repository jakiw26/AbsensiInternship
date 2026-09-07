<?php

namespace App\Http\Controllers;

use App\Models\Absensi;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensis = Absensi::where('user_id', auth()->id())
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('internship.absensi.index', compact('absensis'));
    }
}
