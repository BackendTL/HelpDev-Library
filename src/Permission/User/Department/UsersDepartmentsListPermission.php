<?php

namespace HelpDev\Permission\User\Department;

use HelpDev\Permission\PermissionInterface;

class UsersDepartmentsListPermission implements PermissionInterface
{
    private string $key = '1.2.2';
    private string $description = 'Позволяет получать список отделов';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}