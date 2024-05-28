<?php

namespace App\Traits;

use App\Models\Tools\Seo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Str;

trait Seoable
{
    public function seo(): MorphOne
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
}
