<?php

namespace HelpDev\Permission\User\Department;

use HelpDev\Permission\PermissionInterface;

class UsersDepartmentsEditPermission implements PermissionInterface
{
    private string $key = '1.2.3';
    private string $description = 'Позволяет редактировать отделы';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}