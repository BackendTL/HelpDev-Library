<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentIssueClosePermission implements PermissionInterface
{
    public const KEY = '3.1.3';
    public const DESCRIPTION = 'Закрывать issue';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}