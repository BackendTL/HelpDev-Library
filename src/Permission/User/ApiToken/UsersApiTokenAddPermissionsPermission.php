<?php

namespace HelpDev\Permission\User\ApiToken;

use HelpDev\Permission\PermissionInterface;

class UsersApiTokenAddPermissionsPermission implements PermissionInterface
{
    private string $key = '1.5.3';
    private string $description = 'Позволяет добавить разрешения для АПИ токена';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}