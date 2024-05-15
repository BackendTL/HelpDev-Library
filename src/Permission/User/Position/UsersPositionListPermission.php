<?php

namespace HelpDev\Permission\User\Position;

use HelpDev\Permission\PermissionInterface;

class UsersPositionListPermission implements PermissionInterface
{
    public const KEY = '1.3.3';
    public const DESCRIPTION = 'Получать список должностей';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}