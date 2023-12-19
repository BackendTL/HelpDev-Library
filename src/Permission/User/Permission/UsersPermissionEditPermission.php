<?php

namespace HelpDev\Permission\User\Permission;

use HelpDev\Permission\PermissionInterface;

class UsersPermissionEditPermission implements PermissionInterface
{
    public const KEY = '1.4.2';
    public const DESCRIPTION = 'Позволяет редактировать разрешения';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}