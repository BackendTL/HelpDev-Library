<?php

namespace HelpDev\Permission\User\ApiToken;

use HelpDev\Permission\PermissionInterface;

class UsersApiTokenUnblockPermission implements PermissionInterface
{
    private string $key = '1.5.6';
    private string $description = 'Позволяет разблокировать АПИ токен';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}