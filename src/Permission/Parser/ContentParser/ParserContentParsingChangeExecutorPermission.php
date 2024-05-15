<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentParsingChangeExecutorPermission implements PermissionInterface
{
    public const KEY = '3.1.12';
    public const DESCRIPTION = 'Сменить исполнителя парсинга';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}