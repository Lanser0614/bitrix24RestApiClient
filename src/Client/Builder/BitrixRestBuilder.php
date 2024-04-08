<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\Builder;

use Lanser\Bitrix24restApi\Client\BitrixEntity\CompanyDTO;
use Lanser\Bitrix24restApi\Client\Builder\RestClient\CompanyRestClient;
use Lanser\Bitrix24restApi\Client\Builder\Response\BitrixResponseMapper;
use Lanser\Bitrix24restApi\Client\Builder\RestClient\ContactRestClient;
use Lanser\Bitrix24restApi\Client\Builder\RestClient\DealRestClient;
use Lanser\Bitrix24restApi\Client\Builder\RestClient\LeadRestClient;

class BitrixRestBuilder
{
    public ?string $connection = null;

    public function __construct()
    {
        $this->connection = config('bitrix_rest_api.connection.default');
    }

    public function setConnection(?string $connection = null): static
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

    public function deal(): DealRestClient
    {
        return new DealRestClient($this->connection);
    }

    public function contact(): ContactRestClient
    {
        return new ContactRestClient($this->connection);
    }

    public function lead(): LeadRestClient
    {
        return new LeadRestClient($this->connection);
    }
}