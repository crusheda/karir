<?php

namespace App\Http\Controllers\Rekrutmen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use Redirect;
use Auth;
use File;
use Validator;
use ZipArchive;
use Carbon\Carbon;
use App\Models\alamat;
use App\Models\rekrutmen\pengumuman;
use App\Models\rekrutmen\registrasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class PengumumanController extends Controller
{
    public function index()
    {
        $show = pengumuman::orderBy('mulai','ASC')->get();

        $data = [
            'show' => $show,
        ];

        return view('pages.rekrutmen.pengumuman.index')->with('list', $data);
    }
}
