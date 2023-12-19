<?php

namespace HelpDev\Permission\User\ApiToken;

use HelpDev\Permission\PermissionInterface;

class UsersApiTokenBlockPermission implements PermissionInterface
{
    private string $key = '1.5.5';
    private string $description = 'Позволяет заблокировать АПИ токен';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}