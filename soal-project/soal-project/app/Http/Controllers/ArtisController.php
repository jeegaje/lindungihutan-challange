<?php

namespace App\Http\Controllers;

use App\Models\Artis;
use Illuminate\Http\Request;

class ArtisController extends Controller
{
    public function create(Request $request)
    {
        $lastArtis = Artis::orderBy('kd_artis', 'desc')->first();
        if ($lastArtis) {
            $lastNumber = (int)substr($lastArtis->kd_artis, 1);
            $newNumber = $lastNumber + 1;
            $newkdartis = 'A' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);
        } else {
            $newkdartis = 'A001';
        }

        $request->validate([
            "nm_artis"=> "required",
            "jk"=> "required",
            "bayaran"=> "required|integer",
            "award"=> "required|integer",
            "negara"=> "required",
        ]);

        Artis::create([
            'kd_artis' => $newkdartis,
            'nm_artis' => $request->nm_artis,
            'jk' => $request->jk,
            'bayaran' => $request->bayaran,
            'award' => $request->award,
            'negara' => $request->negara,
        ]);

        return redirect()->route('dashboard')->with('success','Success Menambah Artis');
    }

    public function update($kd_artis, Request $request)
    {

        $request->validate([
            "nm_artis"=> "required",
            "jk"=> "required",
            "bayaran"=> "required|integer",
            "award"=> "required|integer",
            "negara"=> "required",
        ]);

        $artis = artis::find($kd_artis);

        $artis->update([
            'nm_artis' => $request->nm_artis,
            'jk' => $request->jk,
            'bayaran' => $request->bayaran,
            'award' => $request->award,
            'negara' => $request->negara,
        ]);

        return redirect()->route('dashboard')->with('success','Success Merubah Artis');
    }

    public function delete($kd_artis, Request $request)
    {
        $artis = artis::find($kd_artis);

        $artis->delete();

        return redirect()->route('dashboard')->with('success','Success Menghapus Artis');
    }
}
