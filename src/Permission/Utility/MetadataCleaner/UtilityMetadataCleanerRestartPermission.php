<?php

namespace HelpDev\Permission\Utility\MetadataCleaner;

use HelpDev\Permission\PermissionInterface;

class UtilityMetadataCleanerRestartPermission implements PermissionInterface
{
    private string $key = '2.1.4';
    private string $description = 'Позволяет перезапустить чистку';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}