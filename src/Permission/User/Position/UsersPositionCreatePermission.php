<?php

namespace HelpDev\Permission\User\Position;

use HelpDev\Permission\PermissionInterface;

class UsersPositionCreatePermission implements PermissionInterface
{
    private string $key = '1.3.1';
    private string $description = 'Позволяет создавать должности';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}