<?php

namespace App\Models;

use App\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use TenantTrait;
    protected $guarded = [];

}
