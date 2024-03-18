<?php

namespace HelpDev\Gateway\DTO;

use DateTimeImmutable;

interface GatewayServiceInterface
{
    public const SERVICE_FRONTEND = 'frontend';
    public const SERVICE_USER = 'user_service_api';
    public const SERVICE_EXIF_CLEANER = 'exif_cleaner_service_api';
    public const SERVICE_TRADEMARK = 'trademarks_service_api';
    public const SERVICE_CONTENT_PARSER = 'content_parser_service_api';
    public const SERVICE_NODEJS_PARSER = 'nodejs_parser_api';

    public function getId(): int;

    public function getName(): string;

    public function getBaseUrl(): string;

    public function IsHealthy(): bool;

    public function getLatestHealthCheckedAt(): ?DateTimeImmutable;

    public function getHealthcheckPath(): ?string;

}