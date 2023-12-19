<?php

namespace HelpDev\Permission;

interface PermissionInterface
{
    public static function getKey(): string;
    public static function getDescription(): string;
}