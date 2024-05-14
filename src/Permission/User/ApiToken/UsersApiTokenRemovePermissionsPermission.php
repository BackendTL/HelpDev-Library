<?php

namespace HelpDev\Permission\User\ApiToken;

use HelpDev\Permission\PermissionInterface;

class UsersApiTokenRemovePermissionsPermission implements PermissionInterface
{
    public const KEY = '1.5.4';
    public const DESCRIPTION = 'Удалять разрешения для АПИ токена';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}