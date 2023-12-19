<?php

namespace HelpDev\Permission\User\User;

use HelpDev\Permission\PermissionInterface;

class UsersUserRemovePermissionPermission implements PermissionInterface
{
    private string $key = '1.1.6';
    private string $description = 'Позволяет удалить любому пользователю разрешения';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}