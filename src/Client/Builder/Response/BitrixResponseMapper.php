<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\Builder\Response;

use Lanser\Bitrix24restApi\Client\BitrixEntity\Company;
use Lanser\Bitrix24restApi\Enum\EntityTypeEnum;

class BitrixResponseMapper
{
    /**
     * @param int|array|bool $result
     * @param int $total
     * @param EntityTypeEnum|null $entityTypeEnum
     */
    public function __construct(
        private readonly int|array|bool $result,
        private readonly int $total,
        private readonly ?EntityTypeEnum $entityTypeEnum
    )
    {
    }

    /**
     * @param array $data
     * @param EntityTypeEnum $entity
     * @return self
     */
    public static function fromArray(array $data, EntityTypeEnum $entity): self
    {
        return new self(
            result: $data['result'],
            total: $data['total'],
            entityTypeEnum: $entity
        );
    }

    public function isStore(): bool
    {
        return is_int($this->result);
    }


    public function isUpdate(): bool
    {
        return is_bool($this->result);
    }

    public function isList(): bool
    {
        return (is_array($this->result) && count($this->result) > 1);
    }

    public function getResult(): array|int|bool
    {
        return $this->result;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @return bool
     */
    public function isOne(): bool
    {
        return count($this->result) === 1;
    }

    /**
     * @return mixed
     */
    public function getOneItem(): mixed
    {
        if ($this->isOne() === false) {
            throw new \InvalidArgumentException();
        }

        $firstItem = array_shift($this->result);
        return $this->getEntity($firstItem);
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        $items = $this->result;
        return array_map(fn($item) => $this->getEntity($item), $items);
    }

    /**
     * @param array $data
     * @return mixed
     */
    private function getEntity(array $data): mixed
    {
        return match (true) {
          $this->entityTypeEnum === EntityTypeEnum::COMPANY => Company::fromArray($data),
        };
    }


}