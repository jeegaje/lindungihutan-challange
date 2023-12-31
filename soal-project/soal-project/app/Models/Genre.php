<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;

    protected $table = "genre";

    public function showFilms(): HasMany
    {
        return $this->hasMany(Film::class, 'genre', 'kd_genre');
    }
}
