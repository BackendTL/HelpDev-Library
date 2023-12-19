<?php

namespace HelpDev\Permission\User\User;

use HelpDev\Permission\PermissionInterface;

class UsersUserListPermission implements PermissionInterface
{
    public const KEY = '1.1.3';
    public const DESCRIPTION = 'Позволяет заблокировать любого пользователя системы';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}