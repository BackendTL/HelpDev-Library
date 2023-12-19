<?php

namespace HelpDev\Permission\User\User;

use HelpDev\Permission\PermissionInterface;

class UsersUserRemovePermissionPermission implements PermissionInterface
{
    public const KEY = '1.1.6';
    public const DESCRIPTION = 'Позволяет удалить любому пользователю разрешения';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}