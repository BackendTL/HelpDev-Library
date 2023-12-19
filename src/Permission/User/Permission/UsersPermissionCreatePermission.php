<?php

namespace HelpDev\Permission\User\Permission;

use HelpDev\Permission\PermissionInterface;

class UsersPermissionCreatePermission implements PermissionInterface
{
    private string $key = '1.4.1';
    private string $description = 'Позволяет создавать разрешения';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}