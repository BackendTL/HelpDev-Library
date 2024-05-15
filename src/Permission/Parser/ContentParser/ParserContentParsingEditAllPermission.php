<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentParsingEditAllPermission implements PermissionInterface
{
    public const KEY = '3.1.8';
    public const DESCRIPTION = 'Редактировать любые парсинги';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}