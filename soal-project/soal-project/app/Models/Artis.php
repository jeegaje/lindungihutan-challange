<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artis extends Model
{
    use HasFactory;

    protected $table = 'artis';
    protected $guarded = [];
    protected $primaryKey = 'kd_artis';
    protected $keyType = 'string';
    public $timestamps = false;

    public function showFilms(): HasMany
    {
        return $this->hasMany(Film::class, "kd_artis", "kd_artis");
    }
}
