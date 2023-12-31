<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("genre")->insert([
            ["kd_genre"=>"G001", "nm_genre"=>"ACTION"],
            ["kd_genre"=>"G002", "nm_genre"=>"HORROR"],
            ["kd_genre"=>"G003", "nm_genre"=>"COMEDY"],
            ["kd_genre"=>"G004", "nm_genre"=>"DRAMA"],
            ["kd_genre"=>"G005", "nm_genre"=>"THRILLER"],
            ["kd_genre"=>"G006", "nm_genre"=>"FICTION"],
        ]);
    }
}
