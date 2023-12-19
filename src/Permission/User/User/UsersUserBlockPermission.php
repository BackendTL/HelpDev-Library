<?php

namespace HelpDev\Permission\User\User;

use HelpDev\Permission\PermissionInterface;

class UsersUserBlockPermission implements PermissionInterface
{
    public const KEY = '1.1.1';
    public const DESCRIPTION = 'Позволяет просматривать список всех пользователей системы';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}