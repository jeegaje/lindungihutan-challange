<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        return view("pages.dashboard", [
            "questions"=>[
                ["poin"=>1, "deskripsi"=>"Tampilkan nama film dan nominasi dari nominasi yang terbesar", "slug"=>"poin-1"],
                ["poin"=>2, "deskripsi"=>"Tampilkan nama film dan nominasi yang paling banyak mendapatkan nominasi", "slug"=>"poin-2"],
                ["poin"=>3, "deskripsi"=>"Tampilkan rata2 pendapatan film keseluruhan", "slug"=>"poin-3"],
                ["poin"=>4, "deskripsi"=>"Tampilkan nama film yang huruf terakhir 'n'", "slug"=>"poin-4"],
                ["poin"=>5, "deskripsi"=>"Tampilkan nama film dengan pendapatan terbesar mengandung huruf 's'", "slug"=>"poin-5"],
                ["poin"=>6, "deskripsi"=>"Tampilkan nama artis yang tidak pernah bermain film", "slug"=>"poin-6"],
                ["poin"=>7, "deskripsi"=>"Tampilkan nama artis yang paling banyak bermain film", "slug"=>"poin-7"],
                ["poin"=>8, "deskripsi"=>"Tampilkan nama artis yang bermain film dengan genre drama", "slug"=>"poin-8"],
                ["poin"=>9, "deskripsi"=>"Tampilkan jumlah nominasi dari masing2 produser", "slug"=>"poin-9"],
                ["poin"=>10, "deskripsi"=>"Tampilkan jumlah pendapatan produser marvel secara keseluruhan", "slug"=>"poin-10"],
            ]
        ]);
    }
}
