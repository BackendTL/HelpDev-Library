<?php

namespace HelpDev\Permission\User\User;

use HelpDev\Permission\PermissionInterface;

class UsersUserUnblockPermission implements PermissionInterface
{
    private string $key = '1.1.4';
    private string $description = 'Позволяет разблокировать любого пользователя системы';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}