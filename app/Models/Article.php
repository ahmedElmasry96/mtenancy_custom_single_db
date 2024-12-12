<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $guarded = [];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }

    public function scopeTeamArticles(Builder $query): void
    {
        $query->whereTenantId(auth()->user()->tenant_id);
    }

    protected static function booted(): void
    {
        static::creating(function (Article $article) {
            $article['tenant_id'] = auth()->user()->tenant_id;
        });
    }
}
