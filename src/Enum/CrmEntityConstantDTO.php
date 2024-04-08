<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Enum;

class CrmEntityConstantDTO
{
    public function __construct(
        public int $entityTypeId,
        public string $entityTypeName
    )
    {
    }

    public function getEntityTypeId(): int
    {
        return $this->entityTypeId;
    }

    public function getEntityTypeName(): string
    {
        return $this->entityTypeName;
    }
}