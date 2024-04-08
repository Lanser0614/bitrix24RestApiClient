<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\Builder\RestClient;

use Lanser\Bitrix24restApi\Client\BitrixEntity\DealDTO;
use Lanser\Bitrix24restApi\Client\BitrixRest;
use Lanser\Bitrix24restApi\Client\Builder\Response\BitrixResponseMapper;
use Lanser\Bitrix24restApi\Common\TimeLineTraits;
use Lanser\Bitrix24restApi\Enum\EntityTypeEnum;

class DealRestClient extends BitrixRest
{
    use TimeLineTraits;
    public function __construct(string $connectionString)
    {
        static::$entity = EntityTypeEnum::DEAL;
        parent::__construct($connectionString);
    }

    /**
     * @param dealDTO $deal
     * @return BitrixResponseMapper
     */
    public function store(DealDTO $deal): BitrixResponseMapper
    {
        return $this->makeRequest('crm.deal.add', $deal->getRequestData());
    }

    public function update(int $id, DealDTO $deal): BitrixResponseMapper
    {
        return $this->makeRequest('crm.deal.update', $deal->getRequestData(), [], $id);
    }

    public function getList(array $filters = []): BitrixResponseMapper
    {
        return $this->makeRequest('crm.deal.list', [], $filters);
    }


    public function getOne(int $id): BitrixResponseMapper
    {
        return $this->makeRequest('crm.deal.get', [], [], $id);
    }

    public function delete(string $id): BitrixResponseMapper
    {
        return $this->makeRequest('crm.deal.delete', [], [], $id);
    }
}