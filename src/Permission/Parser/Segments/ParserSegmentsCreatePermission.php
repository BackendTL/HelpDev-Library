<?php

namespace HelpDev\Permission\Parser\Segments;

use HelpDev\Permission\PermissionInterface;

class ParserSegmentsCreatePermission implements PermissionInterface
{
    public const KEY = '3.3.2';
    public const DESCRIPTION = 'Получить создавать новые сегменты';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}