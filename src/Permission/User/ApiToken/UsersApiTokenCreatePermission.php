<?php

namespace HelpDev\Permission\User\ApiToken;

use HelpDev\Permission\PermissionInterface;

class UsersApiTokenCreatePermission implements PermissionInterface
{
    public const KEY = '1.5.2';
    public const DESCRIPTION = 'Позволяет создавать новые АПИ токены';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}