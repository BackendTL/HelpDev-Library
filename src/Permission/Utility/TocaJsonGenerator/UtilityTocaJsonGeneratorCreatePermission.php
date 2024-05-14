<?php

namespace HelpDev\Permission\Utility\TocaJsonGenerator;

use HelpDev\Permission\PermissionInterface;

class UtilityTocaJsonGeneratorCreatePermission implements PermissionInterface
{
    public const KEY = '2.2.1';
    public const DESCRIPTION = 'Создать новую генерацию Json для Toca';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}