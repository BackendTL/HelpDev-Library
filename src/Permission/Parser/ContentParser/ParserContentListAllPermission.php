<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentListAllPermission implements PermissionInterface
{
    public const KEY = '3.1.1';
    public const DESCRIPTION = 'Получать список все парсингов';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}