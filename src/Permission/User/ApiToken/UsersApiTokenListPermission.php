<?php

namespace HelpDev\Permission\User\ApiToken;

use HelpDev\Permission\PermissionInterface;

class UsersApiTokenListPermission implements PermissionInterface
{
    private string $key = '1.5.1';
    private string $description = 'Позволяет просматривать список АПИ токены';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}