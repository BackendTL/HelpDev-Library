<?php

namespace HelpDev\Permission\Utility\Localization;

use HelpDev\Permission\PermissionInterface;

class UtilityLocalizationListOwnPermission implements PermissionInterface
{
    public const KEY = '3.4.3';
    public const DESCRIPTION = 'Просматривать и скачивать только собственные запросы на локализацию';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}
