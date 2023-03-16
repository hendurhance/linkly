<?php declare(strict_types=1);

namespace App\Enums;

enum UserTypeEnum: int
{
    case ADMIN = 0;
    case USER = 1;
}