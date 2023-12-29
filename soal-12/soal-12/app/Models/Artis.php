<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artis extends Model
{
    use HasFactory;

    protected $table = 'artis';

    public function showFilms(): HasMany
    {
        return $this->hasMany(Film::class, "artis", "kd_artis");
    }
}
