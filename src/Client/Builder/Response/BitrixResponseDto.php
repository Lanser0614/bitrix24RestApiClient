<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\Builder\Response;

class BitrixResponseDto
{
    public function __construct(
        private readonly int|array $result,
        private readonly int $total
    )
    {
    }

    public static function fromArray(array $data)
    {
        return new self(
            $data['result'],
            $data['total'],
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
        return is_array($this->result);
    }

    public function getResult(): array|int
    {
        return $this->result;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

}