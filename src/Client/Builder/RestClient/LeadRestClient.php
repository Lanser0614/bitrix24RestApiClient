<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\Builder\RestClient;

use Lanser\Bitrix24restApi\Client\BitrixEntity\LeadDTO;
use Lanser\Bitrix24restApi\Client\BitrixRest;
use Lanser\Bitrix24restApi\Client\Builder\Response\BitrixResponseMapper;
use Lanser\Bitrix24restApi\Enum\EntityTypeEnum;

class LeadRestClient extends BitrixRest
{
    public function __construct(string $connectionString)
    {
        static::$entity = EntityTypeEnum::LEAD;
        parent::__construct($connectionString);
    }

    /**
     * @param LeadDTO $lead
     * @return BitrixResponseMapper
     */
    public function store(LeadDTO $lead): BitrixResponseMapper
    {
        return $this->makeRequest('crm.lead.add', $lead->getRequestData());
    }

    public function update(int $id, LeadDTO $lead): BitrixResponseMapper
    {
        return $this->makeRequest('crm.lead.update', $lead->getRequestData(), [], $id);
    }

    public function getList(array $filters = []): BitrixResponseMapper
    {
        return $this->makeRequest('crm.lead.list', [], $filters);
    }


    public function getOne(int $id): BitrixResponseMapper
    {
        return $this->makeRequest('crm.lead.get', [], [], $id);
    }

    public function delete(string $id): BitrixResponseMapper
    {
        return $this->makeRequest('crm.lead.delete', [], [], $id);
    }
}