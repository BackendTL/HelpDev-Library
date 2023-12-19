<?php

namespace HelpDev\Permission\Utility\TocaJsonGenerator;

use HelpDev\Permission\PermissionInterface;

class UtilityTocaJsonGeneratorCreatePermission implements PermissionInterface
{
    private string $key = '2.2.1';
    private string $description = 'Позволяет создать новую генерацию Json для Toca';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}