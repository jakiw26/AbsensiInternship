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

        return view('internship.dashboard', compact('absensis'));
    }
}
