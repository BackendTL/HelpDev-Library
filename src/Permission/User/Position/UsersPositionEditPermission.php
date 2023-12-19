<?php

namespace HelpDev\Permission\User\Position;

use HelpDev\Permission\PermissionInterface;

class UsersPositionEditPermission implements PermissionInterface
{
    private string $key = '1.3.2';
    private string $description = 'Позволяет редактировать должности';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}