<?php

namespace HelpDev\Permission\Parser\Trademarks;

use HelpDev\Permission\PermissionInterface;

class ParserTrademarksCreatePermission implements PermissionInterface
{
    public const KEY = '3.2.2';
    public const DESCRIPTION = 'Создавать новые запросы на торговые знаки';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}
