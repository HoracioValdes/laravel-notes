<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'title',
        'content',
        'is_published',
    ];

    // ─────────────────────────────
    // Scopes de dominio
    // ─────────────────────────────

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeDrafts($query)
    {
        return $query->where('is_published', false);
    }
}
