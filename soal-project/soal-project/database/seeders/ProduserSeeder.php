<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProduserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("produser")->insert([
            ["kd_produser"=>"PD01", "nm_produser"=>"MARVEL", "international"=>"YA"],
            ["kd_produser"=>"PD02", "nm_produser"=>"HONGKONG CINEMA", "international"=>"YA"],
            ["kd_produser"=>"PD03", "nm_produser"=>"RAPI FILM", "international"=>"TIDAK"],
            ["kd_produser"=>"PD04", "nm_produser"=>"PARKIT", "international"=>"TIDAK"],
            ["kd_produser"=>"PD05", "nm_produser"=>"PARAMOUNT PICTURE", "international"=>"YA"],
        ]);
    }
}
