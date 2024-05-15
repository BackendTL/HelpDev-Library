<?php

namespace HelpDev\Permission\User\Department;

use HelpDev\Permission\PermissionInterface;

class UsersDepartmentsCreatePermission implements PermissionInterface
{
    public const KEY = '1.2.1';
    public const DESCRIPTION = 'Создавать новые отделы';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}