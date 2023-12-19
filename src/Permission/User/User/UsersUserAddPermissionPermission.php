<?php

namespace HelpDev\Permission\User\User;

use HelpDev\Permission\PermissionInterface;

class UsersUserAddPermissionPermission implements PermissionInterface
{
    private string $key = '1.1.5';
    private string $description = 'Позволяет добавлять любому пользователю новые разрешения';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}