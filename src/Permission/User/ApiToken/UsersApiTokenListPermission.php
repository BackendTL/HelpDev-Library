<?php

namespace HelpDev\Permission\User\ApiToken;

use HelpDev\Permission\PermissionInterface;

class UsersApiTokenListPermission implements PermissionInterface
{
    public const KEY = '1.5.1';
    public const DESCRIPTION = 'Позволяет просматривать список АПИ токены';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}