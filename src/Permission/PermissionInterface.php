<?php

namespace HelpDev\Permission;

interface PermissionInterface
{
    public function getKey(): string;
    public function getDescription(): string;
}