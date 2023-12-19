<?php

namespace HelpDev\Permission\User\ApiToken;

use HelpDev\Permission\PermissionInterface;

class UsersApiTokenCreatePermission implements PermissionInterface
{
    private string $key = '1.5.2';
    private string $description = 'Позволяет создавать новые АПИ токены';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}