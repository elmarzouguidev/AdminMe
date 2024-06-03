<?php

namespace App\Enums\CMS;

enum PostStatusEnum: int
{
    case ACTIVE = 1;
    case INACTIVE = 0;

    // extra helper to allow for greater customization of displayed values, without disclosing the name/value data directly
    public function label(): string
    {
        return match ($this) {
            static::ACTIVE => 'Approved',
            static::INACTIVE => 'Pending',
        };
    }

    public static function options()
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $type) => [
                $type->value => $type->label(),
            ])
            ->toArray();
    }

    public function getColor(): string
    {
        return match ($this) {
            PostStatusEnum::ACTIVE => 'bg-primary-transparent',
            PostStatusEnum::INACTIVE => 'bg-warning-transparent',
        };
    }
}
