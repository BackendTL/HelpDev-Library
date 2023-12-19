<?php

namespace HelpDev\Permission\Utility\MetadataCleaner;

use HelpDev\Permission\PermissionInterface;

class UtilityMetadataCleanerRestartPermission implements PermissionInterface
{
    public const KEY = '2.1.4';
    public const DESCRIPTION = 'Позволяет перезапустить чистку';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}