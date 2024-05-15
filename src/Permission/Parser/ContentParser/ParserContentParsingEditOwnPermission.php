<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentParsingEditOwnPermission implements PermissionInterface
{
    public const KEY = '3.1.7';
    public const DESCRIPTION = 'Редактировать собственные парсинги';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}