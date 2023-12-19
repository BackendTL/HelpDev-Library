<?php

namespace HelpDev\Permission\Utility\MetadataCleaner;

use HelpDev\Permission\PermissionInterface;

class UtilityMetadataCleanerListAllPermission implements PermissionInterface
{
    private string $key = '2.1.2';
    private string $description = 'Позволяет просматривать и скачивать результирующие архивы всех запросов на чистку';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}