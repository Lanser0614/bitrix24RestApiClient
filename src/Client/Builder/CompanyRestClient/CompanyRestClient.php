<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\Builder\CompanyRestClient;

use Lanser\Bitrix24restApi\Client\BitrixEntity\Company;
use Lanser\Bitrix24restApi\Client\BitrixRest;
use Lanser\Bitrix24restApi\Client\Builder\Response\BitrixResponseDto;

class CompanyRestClient extends BitrixRest
{
    /**
     * @param Company $company
     * @return BitrixResponseDto
     */
    public function storeCompany(Company $company): BitrixResponseDto
    {
        return $this->makeRequest('crm.company.add', $company->getRequestData());
    }

    public function updateCompany(int $id, Company $company): BitrixResponseDto
    {
        return $this->makeRequest('crm.company.update', $company->getRequestData(), [], $id);
    }

    public function getCompanyList(array $filters = []): BitrixResponseDto
    {
        return $this->makeRequest('crm.company.list', [], $filters);
    }


    public function getCompanyOne(int $id): BitrixResponseDto
    {
        return $this->makeRequest('crm.company.get', [], [], $id);
    }
}