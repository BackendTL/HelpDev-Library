<?php

namespace HelpDev\Permission\Parser\ContentParser;

use HelpDev\Permission\PermissionInterface;

class ParserContentValidationErrorUnIgnorePermission implements PermissionInterface
{
    public const KEY = '3.1.6';
    public const DESCRIPTION = 'Позволяет снять игнор ошибки валидации';

    public static function getKey(): string
    {
        return self::KEY;
    }

    public static function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}