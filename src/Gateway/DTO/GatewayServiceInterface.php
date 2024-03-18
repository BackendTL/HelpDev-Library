<?php

namespace HelpDev\Gateway\DTO;

use DateTimeImmutable;

interface GatewayServiceInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getBaseUrl(): string;

    public function IsHealthy(): bool;

    public function getLatestHealthCheckedAt(): ?DateTimeImmutable;

    public function getHealthcheckPath(): ?string;

}