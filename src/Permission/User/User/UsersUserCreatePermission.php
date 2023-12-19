<?php

namespace HelpDev\Permission\User\User;

use HelpDev\Permission\PermissionInterface;

class UsersUserCreatePermission implements PermissionInterface
{
    public const KEY = '1.1.2';
    public const DESCRIPTION = 'Позволяет создавать новых пользователей системы';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}