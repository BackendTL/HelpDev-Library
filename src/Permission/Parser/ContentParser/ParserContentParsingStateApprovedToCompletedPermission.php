<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentParsingStateApprovedToCompletedPermission implements PermissionInterface
{
    public const KEY = '3.1.10';
    public const DESCRIPTION = 'Менять статус парсинга с Approved на Completed';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}