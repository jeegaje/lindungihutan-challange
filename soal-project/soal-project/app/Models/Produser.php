<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produser extends Model
{
    use HasFactory;

    protected $table = "produser";

    public function showFilms(): HasMany
    {
        return $this->hasMany(Film::class, 'produser', 'kd_produser');
    }
}
