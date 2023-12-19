<?php

namespace HelpDev\Permission\User\User;

use HelpDev\Permission\PermissionInterface;

class UsersUserCreatePermission implements PermissionInterface
{
    private string $key = '1.1.2';
    private string $description = 'Позволяет создавать новых пользователей системы';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}