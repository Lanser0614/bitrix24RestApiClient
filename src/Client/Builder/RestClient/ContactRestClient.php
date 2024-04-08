<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\Builder\RestClient;

use Lanser\Bitrix24restApi\Client\BitrixEntity\ContactDTO;
use Lanser\Bitrix24restApi\Client\BitrixRest;
use Lanser\Bitrix24restApi\Client\Builder\Response\BitrixResponseMapper;
use Lanser\Bitrix24restApi\Enum\EntityTypeEnum;

class ContactRestClient extends BitrixRest
{
    public function __construct(string $connectionString)
    {
        static::$entity = EntityTypeEnum::CONTACT;
        parent::__construct($connectionString);
    }

    /**
     * @param ContactDTO $contact
     * @return BitrixResponseMapper
     */
    public function store(ContactDTO $contact): BitrixResponseMapper
    {
        return $this->makeRequest('crm.contact.add', $contact->getRequestData());
    }

    public function update(int $id, ContactDTO $contact): BitrixResponseMapper
    {
        return $this->makeRequest('crm.contact.update', $contact->getRequestData(), [], $id);
    }

    public function getList(array $filters = []): BitrixResponseMapper
    {
        return $this->makeRequest('crm.contact.list', [], $filters);
    }


    public function getOne(int $id): BitrixResponseMapper
    {
        return $this->makeRequest('crm.contact.get', [], [], $id);
    }

    public function delete(string $id): BitrixResponseMapper
    {
        return $this->makeRequest('crm.contact.delete', [], [], $id);
    }
}