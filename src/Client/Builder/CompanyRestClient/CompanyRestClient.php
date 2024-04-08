<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\Builder\CompanyRestClient;

use Lanser\Bitrix24restApi\Client\BitrixEntity\Company;
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
     * @param Company $company
     * @return BitrixResponseMapper
     */
    public function storeCompany(Company $company): BitrixResponseMapper
    {
        return $this->makeRequest('crm.company.add', $company->getRequestData());
    }

    public function updateCompany(int $id, Company $company): BitrixResponseMapper
    {
        return $this->makeRequest('crm.company.update', $company->getRequestData(), [], $id);
    }

    public function getCompanyList(array $filters = []): BitrixResponseMapper
    {
        return $this->makeRequest('crm.company.list', [], $filters);
    }


    public function getCompanyOne(int $id): BitrixResponseMapper
    {
        return $this->makeRequest('crm.company.get', [], [], $id);
    }
}