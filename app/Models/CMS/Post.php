<?php

namespace App\Models\CMS;

use App\Enums\CMS\PostStatusEnum;
use App\Models\User;
use App\Traits\GetModelByKeyName;
use App\Traits\HasSlug;
use App\Traits\Seoable;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByKeyName;
    use InteractsWithMedia;
    use Seoable;
    use HasSlug;


    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'active' => PostStatusEnum::class,
            'published_at'=>'date',
        ];
    }
}
