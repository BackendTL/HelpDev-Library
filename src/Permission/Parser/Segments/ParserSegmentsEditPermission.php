<?php

namespace HelpDev\Permission\Parser\Segments;

use HelpDev\Permission\PermissionInterface;

class ParserSegmentsEditPermission implements PermissionInterface
{
    public const KEY = '3.3.3';
    public const DESCRIPTION = 'Получить редактировать сегменты';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}