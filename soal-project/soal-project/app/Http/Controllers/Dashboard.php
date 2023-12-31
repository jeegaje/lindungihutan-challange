<?php

namespace App\Http\Controllers;

use App\Models\Artis;
use App\Models\Negara;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        return view("pages.dashboard", [
            "allArtis"=> Artis::all(),
            "countries"=>Negara::all(),
        ]);
    }
}
