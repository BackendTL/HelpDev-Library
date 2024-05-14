<?php

namespace HelpDev\Permission\User\Position;

use HelpDev\Permission\PermissionInterface;

class UsersPositionCreatePermission implements PermissionInterface
{
    public const KEY = '1.3.1';
    public const DESCRIPTION = 'Создавать должности';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}