<?php

namespace HelpDev\Permission\User\User;

use HelpDev\Permission\PermissionInterface;

class UsersUserBlockPermission implements PermissionInterface
{
    private string $key = '1.1.1';
    private string $description = 'Позволяет просматривать список всех пользователей системы';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}