<?php

namespace HelpDev\Permission\Utility\Localization;

use HelpDev\Permission\PermissionInterface;

class UtilityLocalizationCreatePermission implements PermissionInterface
{
    public const KEY = '2.3.1';
    public const DESCRIPTION = 'Создавать новые запросы на локализацию';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}
