<?php

namespace Lanser\Bitrix24restApi\Common;

use Lanser\Bitrix24restApi\Client\Builder\Response\BitrixResponseMapper;
use Lanser\Bitrix24restApi\Enum\EntityTypeEnum;

trait TimeLineTraits
{
    public function storeTimeLine(string $comment): BitrixResponseMapper
    {
        return $this->makeRequest('crm.timeline.comment.add', [
            'ENTITY_TYPE' => EntityTypeEnum::getEntityTypeInfo(static::$entity)->getEntityTypeName(),
            'ENTITY_ID' => EntityTypeEnum::getEntityTypeInfo(static::$entity)->getEntityTypeId(),
            'COMMENT' => $comment
        ],);
    }

    public function getListTimeLine(): BitrixResponseMapper
    {
        return $this->makeRequest('crm.timeline.comment.add', [], [
            'ENTITY_TYPE' => EntityTypeEnum::getEntityTypeInfo(static::$entity)->getEntityTypeName(),
            'ENTITY_ID' => EntityTypeEnum::getEntityTypeInfo(static::$entity)->getEntityTypeId(),
        ]);
    }
}