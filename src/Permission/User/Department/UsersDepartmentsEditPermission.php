<?php

namespace HelpDev\Permission\User\Department;

use HelpDev\Permission\PermissionInterface;

class UsersDepartmentsEditPermission implements PermissionInterface
{
    public const KEY = '1.2.3';
    public const DESCRIPTION = 'Редактировать отделы';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}