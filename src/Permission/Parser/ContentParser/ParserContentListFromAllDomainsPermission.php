<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentListFromAllDomainsPermission implements PermissionInterface
{
    public const KEY = '3.1.13';
    public const DESCRIPTION = 'Получать список всех парсингов всех доменов';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}