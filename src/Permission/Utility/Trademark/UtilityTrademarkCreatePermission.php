<?php

namespace HelpDev\Permission\Utility\Localization;

use HelpDev\Permission\PermissionInterface;

class UtilityTrademarkCreatePermission implements PermissionInterface
{
    public const KEY = '2.4.1';
    public const DESCRIPTION = 'Создавать новые запросы на торговые знаки';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}
