<?php

namespace HelpDev\Permission\Utility\MetadataCleaner;

use HelpDev\Permission\PermissionInterface;

class UtilityMetadataCleanerCreatePermission implements PermissionInterface
{
    private string $key = '2.1.1';
    private string $description = 'Позволяет создать новый запрос на чистку';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}