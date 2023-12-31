<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GenreSeeder::class,
            NegaraSeeder::class,
            ProduserSeeder::class,
            ArtisSeeder::class,
            FilmSeeder::class,
        ]);
    }
}
