<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class NegaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("negara")->insert([
            ["kd_negara"=>"AS", "nm_negara"=>"AMERIKA SERIKAT"],
            ["kd_negara"=>"HK", "nm_negara"=>"HONGKONG"],
            ["kd_negara"=>"ID", "nm_negara"=>"INDONESIA"],
            ["kd_negara"=>"IN", "nm_negara"=>"INDIA"],
        ]);
    }
}
