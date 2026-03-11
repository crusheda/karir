<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rating;

class PortalController extends Controller
{
    public function index()
    {
        $rating = rating::selectRaw('rating, count(*) as total')
            ->groupBy('rating')
            ->pluck('total','rating');

        return view('pages.portal.index', compact('rating'));
    }
}
