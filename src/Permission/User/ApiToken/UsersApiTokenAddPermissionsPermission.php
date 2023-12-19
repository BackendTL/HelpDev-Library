<?php

namespace HelpDev\Permission\User\ApiToken;

use HelpDev\Permission\PermissionInterface;

class UsersApiTokenAddPermissionsPermission implements PermissionInterface
{
    public const KEY = '1.5.3';
    public const DESCRIPTION = 'Позволяет добавить разрешения для АПИ токена';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}