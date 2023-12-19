<?php

namespace HelpDev\Permission\Utility\MetadataCleaner;

use HelpDev\Permission\PermissionInterface;

class UtilityMetadataCleanerListAllPermission implements PermissionInterface
{
    public const KEY = '2.1.2';
    public const DESCRIPTION = 'Позволяет просматривать и скачивать результирующие архивы всех запросов на чистку';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}