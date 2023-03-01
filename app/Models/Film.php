<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    use HasFactory;

    public const STATUS_PENDING = 'pending';
    public const STATUS_ON_MODERATION = 'on_moderation';
    public const STATUS_READY = 'ready';

    protected $with = ['genres'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'starring' => 'array',
        'promo' => 'bool',
    ];

    protected $fillable = [
        'name',
        'poster_image',
        'preview_image',
        'background_image',
        'background_color',
        'video_link',
        'preview_video_link',
        'description',
        'director',
        'starring',
        'run_time',
        'released',
    ];

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function scores(): HasMany
    {
        return $this->hasMany(Comment::class)->whereNotNull('rating');
    }

    public function getRatingAttribute(): float
    {
        return round($this->scores()->avg('rating'), 1);
    }

    /**
     * Добавление сортировки.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string|null $orderBy
     * @param string|null $orderTo
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOrdered($query, ?string $orderBy, ?string $orderTo): \Illuminate\Database\Eloquent\Builder
    {
        return $query->when($orderBy === 'rating', function ($q) {
            $q->withAvg('scores as rating', 'rating');
        })->orderBy($orderBy ?? 'released', $orderTo ?? 'desc');
    }

    public function scopePromo($query)
    {
        $query->where('promo', true);
    }
}
