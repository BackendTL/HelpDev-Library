<?php

namespace HelpDev\Permission\Utility\TocaJsonGenerator;

use HelpDev\Permission\PermissionInterface;

class UtilityTocaJsonGeneratorListOwnPermission implements PermissionInterface
{
    public const KEY = '2.2.3';
    public const DESCRIPTION = 'Просматривать и скачивать результирующие архивы только собственных генераций Json для Toca';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}