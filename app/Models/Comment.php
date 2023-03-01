<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    public const DEFAULT_AUTHOR = 'Гость';

    protected $visible = [
        'id',
        'text',
        'rating',
        'parent_id',
        'created_at',
        'author',
    ];

    protected $appends = [
        'author',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function film(): BelongsTo
    {
        return $this->belongsTo(Film::class);
    }

    public function getAuthorAttribute(): string
    {
        return $this->user->name ?? self::DEFAULT_AUTHOR;
    }
}
