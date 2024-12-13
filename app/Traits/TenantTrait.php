<?php

namespace App\Traits;

use App\Models\Scopes\TenantScope;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait TenantTrait
{
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }

    protected static function bootTenantTrait(): void
    {
        static::addGlobalScope(new TenantScope());

        static::creating(function (Model $model) {
            $model['tenant_id'] = auth()->user()->tenant_id;
        });
    }
}
