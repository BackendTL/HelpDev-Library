<?php

namespace HelpDev\Permission\User\Position;

use HelpDev\Permission\PermissionInterface;

class UsersPositionListPermission implements PermissionInterface
{
    private string $key = '1.3.3';
    private string $description = 'Позволяет получать список должностей';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}