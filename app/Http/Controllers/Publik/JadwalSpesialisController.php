<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalSpesialisController extends Controller
{
    public function index()
    {
        return view('pages.publik.jadwal.index');
    }
}
