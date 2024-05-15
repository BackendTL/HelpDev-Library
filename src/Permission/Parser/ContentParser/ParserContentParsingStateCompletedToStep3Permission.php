<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentParsingStateCompletedToStep3Permission implements PermissionInterface
{
    public const KEY = '3.1.9';
    public const DESCRIPTION = 'Менять статус парсинга с Completed на Step3';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}