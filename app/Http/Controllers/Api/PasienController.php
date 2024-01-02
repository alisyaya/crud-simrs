<?php

namespace App\Http\Controllers\Api;

use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PasienResource;

class PasienController extends Controller
{
    // show all
    public function index()
    {
        //get pasien
        $pasiens = Pasien::latest()->paginate(5);

        //return collection of posts as a resource
        return new PasienResource(true, 'List Data Pasiens', $pasiens);
    }
}
