<?php

namespace App\Enums;

class UserRole
{
    const ADMIN = 1;
    const CUSTOMER = 2;

    public static function values(): array
    {
        return [
            self::ADMIN,
            self::CUSTOMER,
        ];
    }
}
