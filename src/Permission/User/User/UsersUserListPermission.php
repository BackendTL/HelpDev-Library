<?php

namespace HelpDev\Permission\User\User;

use HelpDev\Permission\PermissionInterface;

class UsersUserListPermission implements PermissionInterface
{
    private string $key = '1.1.3';
    private string $description = 'Позволяет заблокировать любого пользователя системы';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}