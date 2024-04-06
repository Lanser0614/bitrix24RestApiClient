<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\Builder;

use Lanser\Bitrix24restApi\Client\BitrixEntity\Company;
use Lanser\Bitrix24restApi\Client\Builder\CompanyRestClient\CompanyRestClient;
use Lanser\Bitrix24restApi\Client\Builder\Response\BitrixResponseDto;

class BitrixRestBuilder
{
    public ?string $connection = "";

    public function setConnection(?string $connection = null)
    {
        if ($connection) {
            $this->connection = $connection;
            return $this;
        }

        return $this;
    }

    public function company(): CompanyRestClient
    {
        return new CompanyRestClient($this->connection);
    }

}