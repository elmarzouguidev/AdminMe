<?php

namespace App\Models\CMS;

use App\Traits\GetModelByKeyName;
use App\Traits\Seoable;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByKeyName;
    use Seoable;
}
