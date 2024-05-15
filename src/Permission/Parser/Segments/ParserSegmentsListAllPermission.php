<?php

namespace HelpDev\Permission\Parser\Segments;

use HelpDev\Permission\PermissionInterface;

class ParserSegmentsListAllPermission implements PermissionInterface
{
    public const KEY = '3.3.1';
    public const DESCRIPTION = 'Получить список всех сегментов (раздел добавления)';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}