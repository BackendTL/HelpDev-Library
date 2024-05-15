<?php

namespace HelpDev\Permission\Utility\MetadataCleaner;

use HelpDev\Permission\PermissionInterface;

class UtilityMetadataCleanerListOwnPermission implements PermissionInterface
{
    public const KEY = '2.1.3';
    public const DESCRIPTION = 'Просматривать и скачивать только собственные запросы на чистку';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}