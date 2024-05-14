<?php

namespace HelpDev\Permission\Utility\MetadataCleaner;

use HelpDev\Permission\PermissionInterface;

class UtilityMetadataCleanerCreatePermission implements PermissionInterface
{
    public const KEY = '2.1.1';
    public const DESCRIPTION = 'Создавать новые запросы на чистку';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}