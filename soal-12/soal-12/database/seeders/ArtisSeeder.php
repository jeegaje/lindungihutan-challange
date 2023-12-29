<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ArtisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("artis")->insert([
            ["kd_artis"=>"A001", "nm_artis"=>"ROBERT DOWNEY JR", "jk"=>"PRIA", "bayaran"=>000000000, "award"=>2, "negara"=>"AS"],
            ["kd_artis"=>"A002", "nm_artis"=>"ANGELINA JOLIE", "jk"=>"WANITA", "bayaran"=>700000000, "award"=>1, "negara"=>"AS"],
            ["kd_artis"=>"A003", "nm_artis"=>"JACKIE CHAN", "jk"=>"PRIA", "bayaran"=>200000000, "award"=>7, "negara"=>"HK"],
            ["kd_artis"=>"A004", "nm_artis"=>"JOE TASLIM", "jk"=>"PRIA", "bayaran"=>350000000, "award"=>1, "negara"=>"ID"],
            ["kd_artis"=>"A005", "nm_artis"=>"CHELSEA ISLAN", "jk"=>"WANITA", "bayaran"=>300000000, "award"=>0, "negara"=>"ID"],

        ]);
    }
}
