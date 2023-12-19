<?php

namespace HelpDev\Permission\User\Permission;

use HelpDev\Permission\PermissionInterface;

class UsersPermissionListPermission implements PermissionInterface
{
    private string $key = '1.4.3';
    private string $description = 'Позволяет просматривать список разрешения';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}