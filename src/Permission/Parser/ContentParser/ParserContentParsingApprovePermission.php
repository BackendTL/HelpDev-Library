<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentParsingApprovePermission implements PermissionInterface
{
    public const KEY = '3.1.4';
    public const DESCRIPTION = 'Позволяет создать заапрувить парсинг';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}