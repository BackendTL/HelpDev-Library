<?php

namespace HelpDev\Permission\Utility\Localization;

use HelpDev\Permission\PermissionInterface;

class UtilityLocalizationListAllPermission implements PermissionInterface
{
    public const KEY = '2.3.2';
    public const DESCRIPTION = 'Просматривать и скачивать результирующие архивы всех запросов на локализацию';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}
