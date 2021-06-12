<?php

namespace App\Models\Enums;

class VisitType
{
    const IN  = 'in';
    const OUT = 'out';

    public static function values(): array
    {
        return [
            self::IN  => trans('common.in'),
            self::OUT => trans('common.out'),
        ];
    }

    public static function keys(): array
    {
        return array_keys(self::values());
    }

    public static function colors(): array
    {
        return [
            self::IN  => 'text-success',
            self::OUT => 'text-danger',
        ];
    }
}
