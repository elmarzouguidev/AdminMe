<?php

namespace App\Models\Tools;

use App\Traits\GetModelByKeyName;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByKeyName;



    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [];
        
    }
}
