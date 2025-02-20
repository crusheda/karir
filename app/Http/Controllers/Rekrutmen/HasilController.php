<?php

namespace App\Http\Controllers\Rekrutmen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        return view('pages.rekrutmen.hasil.index');
    }
}
