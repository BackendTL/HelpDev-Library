<?php

namespace HelpDev\Permission\User\User;

use HelpDev\Permission\PermissionInterface;

class UsersUserAddPermissionPermission implements PermissionInterface
{
    public const KEY = '1.1.5';
    public const DESCRIPTION = 'Позволяет добавлять любому пользователю новые разрешения';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}