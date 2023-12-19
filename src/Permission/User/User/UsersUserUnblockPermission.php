<?php

namespace HelpDev\Permission\User\User;

use HelpDev\Permission\PermissionInterface;

class UsersUserUnblockPermission implements PermissionInterface
{
    public const KEY = '1.1.4';
    public const DESCRIPTION = 'Позволяет разблокировать любого пользователя системы';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}