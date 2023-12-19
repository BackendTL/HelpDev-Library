<?php

namespace HelpDev\Permission\User\ApiToken;

use HelpDev\Permission\PermissionInterface;

class UsersApiTokenRemovePermissionsPermission implements PermissionInterface
{
    private string $key = '1.5.4';
    private string $description = 'Позволяет удалить разрешения для АПИ токена';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}