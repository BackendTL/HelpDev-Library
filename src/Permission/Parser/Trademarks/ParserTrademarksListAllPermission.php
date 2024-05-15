<?php

namespace HelpDev\Permission\Parser\Trademarks;

use HelpDev\Permission\PermissionInterface;

class ParserTrademarksListAllPermission implements PermissionInterface
{
    public const KEY = '3.2.1';
    public const DESCRIPTION = 'Получить список всех трейдмарков';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}