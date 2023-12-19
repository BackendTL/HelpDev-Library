<?php

namespace HelpDev\Permission\User\Department;

use HelpDev\Permission\PermissionInterface;

class UsersDepartmentsListPermission implements PermissionInterface
{
    public const KEY = '1.2.2';
    public const DESCRIPTION = 'Позволяет получать список отделов';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}