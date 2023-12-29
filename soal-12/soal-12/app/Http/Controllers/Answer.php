<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Artis;
use App\Models\Produser;
use Illuminate\Support\Facades\DB;
class Answer extends Controller
{
    public function poin1()
    {
        return view("pages.poin-1", [
            "films"=> Film::select('nm_film', 'nominasi')->orderBy('nominasi', 'desc')->get(),
        ]);
    }

    public function poin2()
    {
        return view("pages.poin-2", [
            "films"=> Film::select('nm_film', 'nominasi')->orderBy('nominasi', 'desc')->first()
        ]);
    }

    public function poin3()
    {
        return view("pages.poin-3", [
            "avgIncome"=> Film::avg('pendapatan'),
        ]);
    }

    public function poin4()
    {
        return view("pages.poin-4", [
            "films"=> Film::select('nm_film')->where('nm_film', 'LIKE', '%n')->get(),
        ]);
    }

    public function poin5()
    {
        return view("pages.poin-5", [
            "film"=> Film::select('nm_film')->where('nm_film', 'LIKE', '%s%')->orderBy('pendapatan', 'desc')->first(),
        ]);
    }

    public function poin6()
    {
        return view("pages.poin-6", [
            "dataArtis"=> Artis::doesntHave('showFilms')->get(),
        ]);
    }

    public function poin7()
    {
        return view("pages.poin-7", [
            "artis"=> Artis::join('film', 'artis.kd_artis', '=', 'film.artis')
            ->select('artis.nm_artis', DB::raw('COUNT(*) as jumlah_film'))
            ->groupBy('artis.nm_artis')
            ->orderBy('jumlah_film', 'desc')
            ->first(),
        ]);
    }

    public function poin8()
    {
        return view("pages.poin-8", [
            "dataArtis"=> Artis::whereHas('showFilms', function ($query) {
                $query->whereHas('showGenre', function ($query) {
                    $query->where('nm_genre', 'drama');
                });
            })->get(),
        ]);
    }

    public function poin9()
    {
        return view("pages.poin-9", [
            "dataProduser"=> Produser::leftjoin('film', 'produser.kd_produser', '=', 'film.produser')
            ->select('produser.nm_produser', DB::raw('SUM(film.nominasi) as jumlah_nominasi'))
            ->groupBy('produser.nm_produser')
            ->get()
        ]);
    }

    public function poin10()
    {
        return view("pages.poin-10", [
            "marvelIncome"=> Produser::where('nm_produser', '=', 'MARVEL')
            ->join('film', 'produser.kd_produser', '=', 'film.produser')
            ->select('produser.nm_produser', DB::raw('SUM(film.pendapatan) as jumlah_pendapatan'))
            ->groupBy('produser.nm_produser')
            ->get()
        ]);
    }


}
