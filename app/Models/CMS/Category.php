<?php

namespace App\Models\CMS;

use App\Traits\GetModelByKeyName;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByKeyName;



    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
