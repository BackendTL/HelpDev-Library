<?php

namespace HelpDev\Permission\User\Permission;

use HelpDev\Permission\PermissionInterface;

class UsersPermissionListPermission implements PermissionInterface
{
    public const KEY = '1.4.3';
    public const DESCRIPTION = 'Просматривать список разрешений';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}