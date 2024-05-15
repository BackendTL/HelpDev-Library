<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentParsingChangeIsSpecialPermission implements PermissionInterface
{
    public const KEY = '3.1.11';
    public const DESCRIPTION = 'Управлять флагом isSpecial парсинга и видеть special данные';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}