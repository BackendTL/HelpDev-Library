<?php

namespace HelpDev\Permission\User\ApiToken;

use HelpDev\Permission\PermissionInterface;

class UsersApiTokenUnblockPermission implements PermissionInterface
{
    public const KEY = '1.5.6';
    public const DESCRIPTION = 'Разблокировать АПИ токен';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}