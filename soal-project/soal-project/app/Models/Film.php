<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Film extends Model
{
    use HasFactory;

    protected $table = "film";

    public function showArtis(): BelongsTo
    {
        return $this->belongsTo(Artis::class, 'artis', 'kd_artis');
    }

    public function showGenre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre', 'kd_genre');
    }

    public function showProduser(): BelongsTo
    {
        return $this->belongsTo(Produser::class, 'produser', 'kd_produser');
    }
}
