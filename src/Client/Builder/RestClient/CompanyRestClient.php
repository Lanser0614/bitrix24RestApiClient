<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\Builder\RestClient;

use Lanser\Bitrix24restApi\Client\BitrixEntity\CompanyDTO;
use Lanser\Bitrix24restApi\Client\BitrixRest;
use Lanser\Bitrix24restApi\Client\Builder\Response\BitrixResponseMapper;
use Lanser\Bitrix24restApi\Enum\EntityTypeEnum;

class CompanyRestClient extends BitrixRest
{
    public function __construct(string $connectionString)
    {
        static::$entity = EntityTypeEnum::COMPANY;
        parent::__construct($connectionString);
    }

    /**
     * @param CompanyDTO $company
     * @return BitrixResponseMapper
     */
    public function store(CompanyDTO $company): BitrixResponseMapper
    {
        return $this->makeRequest('crm.company.add', $company->getRequestData());
    }

    public function update(string $id, CompanyDTO $company): BitrixResponseMapper
    {
        return $this->makeRequest('crm.company.update', $company->getRequestData(), [], $id);
    }

    public function getList(array $filters = []): BitrixResponseMapper
    {
        return $this->makeRequest('crm.company.list', [], $filters);
    }


    public function getOne(string $id): BitrixResponseMapper
    {
        return $this->makeRequest('crm.company.get', [], [], $id);
    }

    public function delete(string $id): BitrixResponseMapper
    {
        return $this->makeRequest('crm.company.delete', [], [], $id);
    }
}