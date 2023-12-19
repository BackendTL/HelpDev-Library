<?php

namespace HelpDev\Permission\User\Department;

use HelpDev\Permission\PermissionInterface;

class UsersDepartmentsCreatePermission implements PermissionInterface
{
    private string $key = '1.2.1';
    private string $description = 'Позволяет создать новый отдел';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}