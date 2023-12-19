<?php

namespace HelpDev\Permission\Utility\TocaJsonGenerator;

use HelpDev\Permission\PermissionInterface;

class UtilityTocaJsonGeneratorListAllPermission implements PermissionInterface
{
    private string $key = '2.2.2';
    private string $description = 'Позволяет просматривать и скачивать результирующие архивы всех генераций Json для Toca';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}