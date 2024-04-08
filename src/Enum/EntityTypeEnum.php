<?php

namespace Lanser\Bitrix24restApi\Enum;

enum EntityTypeEnum:string
{
    case CONTACT = 'CONTACT';
    case COMPANY = 'COMPANY';
    case DEAL = 'DEAL';
    case LEAD = 'LEAD';
    case INVOICE = 'INVOICE';

    public static function getEntityTypeInfo(EntityTypeEnum $entityTypeEnum): CrmEntityConstantDTO
    {
        $entityTypeIds = [
            self::CONTACT->value => 3,
            self::COMPANY->value => 4,
            self::LEAD->value => 1,
            self::DEAL->value => 3,
            self::INVOICE->value => 31,
        ];

        $entityTypeNames = [
            self::CONTACT->value => 'CONTACT',
            self::COMPANY->value => 'COMPANY',
            self::LEAD->value => 'LEAD',
            self::DEAL->value => 'DEAL',
            self::INVOICE->value => 'SMART_INVOICE',
        ];

        return new CrmEntityConstantDTO(
            $entityTypeIds[$entityTypeEnum->value],
            $entityTypeNames[$entityTypeEnum->value],
        );
    }
}
