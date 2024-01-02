<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    //tampil data all
    public function index()
    {
        $pasiens = Pasien::latest()->paginate(5);

        // view
        return view('pasien_views.index', compact('pasiens'));
    }
}
