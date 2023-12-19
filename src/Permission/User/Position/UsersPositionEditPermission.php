<?php

namespace HelpDev\Permission\User\Position;

use HelpDev\Permission\PermissionInterface;

class UsersPositionEditPermission implements PermissionInterface
{
    public const KEY = '1.3.2';
    public const DESCRIPTION = 'Позволяет редактировать должности';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}