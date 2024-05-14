<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentValidationErrorIgnorePermission implements PermissionInterface
{
    public const KEY = '3.1.5';
    public const DESCRIPTION = 'Игнорить ошибки валидации';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}