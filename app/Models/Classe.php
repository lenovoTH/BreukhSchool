<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    // public function niveau(): BelongsTo
    // {
    //     return $this->belongsTo(Niveau::class);
    // }
}
