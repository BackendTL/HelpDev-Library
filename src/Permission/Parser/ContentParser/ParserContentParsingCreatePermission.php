<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentParsingCreatePermission implements PermissionInterface
{
    public const KEY = '3.1.2';
    public const DESCRIPTION = 'Позволяет создать новый парсинг';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}