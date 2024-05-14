<?php

namespace HelpDev\Permission\User\ApiToken;

use HelpDev\Permission\PermissionInterface;

class UsersApiTokenListPermission implements PermissionInterface
{
    public const KEY = '1.5.1';
    public const DESCRIPTION = 'Просматривать список АПИ токенов';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}