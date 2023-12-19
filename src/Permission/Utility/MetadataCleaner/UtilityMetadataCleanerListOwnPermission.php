<?php

namespace HelpDev\Permission\Utility\MetadataCleaner;

use HelpDev\Permission\PermissionInterface;

class UtilityMetadataCleanerListOwnPermission implements PermissionInterface
{
    private string $key = '2.1.3';
    private string $description = 'Позволяет просматривать и скачивать только собственные запросы на чистку';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}