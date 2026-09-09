<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
