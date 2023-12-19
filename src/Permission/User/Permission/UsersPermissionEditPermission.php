<?php

namespace HelpDev\Permission\User\Permission;

use HelpDev\Permission\PermissionInterface;

class UsersPermissionEditPermission implements PermissionInterface
{
    private string $key = '1.4.2';
    private string $description = 'Позволяет редактировать разрешения';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}