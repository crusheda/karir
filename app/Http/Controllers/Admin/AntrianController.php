<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    function indexDisplay()
    {
        return view('pages.admin.antrian.display.index');
    }
}
