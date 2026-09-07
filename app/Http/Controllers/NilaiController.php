<?php

namespace App\Http\Controllers;

use App\Models\Nilai;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::where('user_id', auth()->id())->first();
        return view('internship.nilai.index', compact('nilai'));
    }
}
