<?php

namespace HelpDev\Permission\User\Permission;

use HelpDev\Permission\PermissionInterface;

class UsersPermissionCreatePermission implements PermissionInterface
{
    public const KEY = '1.4.1';
    public const DESCRIPTION = 'Создавать разрешения';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}