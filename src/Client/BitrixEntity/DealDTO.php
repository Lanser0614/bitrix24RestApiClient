<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\BitrixEntity;

class DealDTO
{
    public function __construct(
        private ?string $additional_info = null,
        private ?string $assigned_by_id = null,
        private ?string $bank_detail_id = null,
        private ?string $begindate = null,
        private ?string $category_id = null,
        private ?string $closed = null,
        private ?string $closedate = null,
        private ?string $comments = null,
        private ?string $company_id = null,
        private ?string $contact_id = null,
        private ?array  $contact_ids = null,
        private ?string $created_by_id = null,
        private ?string $currency_id = null,
        private ?string $date_create = null,
        private ?string $date_modify = null,
        private ?string $id = null,
        private ?string $is_new = null,
        private ?string $is_recurring = null,
        private ?string $is_return_customer = null,
        private ?string $lead_id = null,
        private ?string $location_id = null,
        private ?string $modify_by_id = null,
        private ?string $moved_by_id = null,
        private ?string $moved_time = null,
        private ?string $opened = null,
        private ?string $opportunity = null,
        private ?string $originator_id = null,
        private ?string $origin_id = null,
        private ?string $probability = null,
        private ?string $quote_id = null,
        private ?string $requisite_id = null,
        private ?string $stage_id = null,
        private ?string $stage_semantic_id = null,
        private ?string $source_id = null,
        private ?string $source_description = null,
        private ?string $tax_value = null,
        private ?string $title = null,
        private ?string $type_id = null,
        private ?string $utm_campaign = null,
        private ?string $utm_content = null,
        private ?string $utm_medium = null,
        private ?string $utm_source = null,
        private ?string $utm_term = null,
    )
    {
    }

    public function setAssignedById(?string $assigned_by_id): DealDTO
    {
        $this->assigned_by_id = $assigned_by_id;
        return $this;
    }

    public function setBankDetailId(?string $bank_detail_id): DealDTO
    {
        $this->bank_detail_id = $bank_detail_id;
        return $this;
    }

    public function setBegindate(?string $begindate): DealDTO
    {
        $this->begindate = $begindate;
        return $this;
    }

    public function setCategoryId(?string $category_id): DealDTO
    {
        $this->category_id = $category_id;
        return $this;
    }

    public function setClosed(?string $closed): DealDTO
    {
        $this->closed = $closed;
        return $this;
    }

    public function setClosedate(?string $closedate): DealDTO
    {
        $this->closedate = $closedate;
        return $this;
    }

    public function setComments(?string $comments): DealDTO
    {
        $this->comments = $comments;
        return $this;
    }

    public function setCompanyId(?string $company_id): DealDTO
    {
        $this->company_id = $company_id;
        return $this;
    }

    public function setContactId(?string $contact_id): DealDTO
    {
        $this->contact_id = $contact_id;
        return $this;
    }

    public function setContactIds(?array $contact_ids): DealDTO
    {
        $this->contact_ids = $contact_ids;
        return $this;
    }

    public function setCreatedById(?string $created_by_id): DealDTO
    {
        $this->created_by_id = $created_by_id;
        return $this;
    }

    public function setCurrencyId(?string $currency_id): DealDTO
    {
        $this->currency_id = $currency_id;
        return $this;
    }

    public function setDateCreate(?string $date_create): DealDTO
    {
        $this->date_create = $date_create;
        return $this;
    }

    public function setDateModify(?string $date_modify): DealDTO
    {
        $this->date_modify = $date_modify;
        return $this;
    }

    public function setId(?string $id): DealDTO
    {
        $this->id = $id;
        return $this;
    }

    public function setIsNew(?string $is_new): DealDTO
    {
        $this->is_new = $is_new;
        return $this;
    }

    public function setIsRecurring(?string $is_recurring): DealDTO
    {
        $this->is_recurring = $is_recurring;
        return $this;
    }

    public function setIsReturnCustomer(?string $is_return_customer): DealDTO
    {
        $this->is_return_customer = $is_return_customer;
        return $this;
    }

    public function setLeadId(?string $lead_id): DealDTO
    {
        $this->lead_id = $lead_id;
        return $this;
    }

    public function setLocationId(?string $location_id): DealDTO
    {
        $this->location_id = $location_id;
        return $this;
    }

    public function setModifyById(?string $modify_by_id): DealDTO
    {
        $this->modify_by_id = $modify_by_id;
        return $this;
    }

    public function setMovedById(?string $moved_by_id): DealDTO
    {
        $this->moved_by_id = $moved_by_id;
        return $this;
    }

    public function setMovedTime(?string $moved_time): DealDTO
    {
        $this->moved_time = $moved_time;
        return $this;
    }

    public function setOpened(?string $opened): DealDTO
    {
        $this->opened = $opened;
        return $this;
    }

    public function setOpportunity(?string $opportunity): DealDTO
    {
        $this->opportunity = $opportunity;
        return $this;
    }

    public function setOriginatorId(?string $originator_id): DealDTO
    {
        $this->originator_id = $originator_id;
        return $this;
    }

    public function setOriginId(?string $origin_id): DealDTO
    {
        $this->origin_id = $origin_id;
        return $this;
    }

    public function setProbability(?string $probability): DealDTO
    {
        $this->probability = $probability;
        return $this;
    }

    public function setQuoteId(?string $quote_id): DealDTO
    {
        $this->quote_id = $quote_id;
        return $this;
    }

    public function setRequisiteId(?string $requisite_id): DealDTO
    {
        $this->requisite_id = $requisite_id;
        return $this;
    }

    public function setStageId(?string $stage_id): DealDTO
    {
        $this->stage_id = $stage_id;
        return $this;
    }

    public function setStageSemanticId(?string $stage_semantic_id): DealDTO
    {
        $this->stage_semantic_id = $stage_semantic_id;
        return $this;
    }

    public function setSourceId(?string $source_id): DealDTO
    {
        $this->source_id = $source_id;
        return $this;
    }

    public function setSourceDescription(?string $source_description): DealDTO
    {
        $this->source_description = $source_description;
        return $this;
    }

    public function setTaxValue(?string $tax_value): DealDTO
    {
        $this->tax_value = $tax_value;
        return $this;
    }

    public function setTitle(?string $title): DealDTO
    {
        $this->title = $title;
        return $this;
    }

    public function setTypeId(?string $type_id): DealDTO
    {
        $this->type_id = $type_id;
        return $this;
    }

    public function setUtmCampaign(?string $utm_campaign): DealDTO
    {
        $this->utm_campaign = $utm_campaign;
        return $this;
    }

    public function setUtmContent(?string $utm_content): DealDTO
    {
        $this->utm_content = $utm_content;
        return $this;
    }

    public function setUtmMedium(?string $utm_medium): DealDTO
    {
        $this->utm_medium = $utm_medium;
        return $this;
    }

    public function setUtmSource(?string $utm_source): DealDTO
    {
        $this->utm_source = $utm_source;
        return $this;
    }

    public function setUtmTerm(?string $utm_term): DealDTO
    {
        $this->utm_term = $utm_term;
        return $this;
    }

    public function setAdditionalInfo(?string $additional_info): DealDTO
    {
        $this->additional_info = $additional_info;
        return $this;
    }

    public function getAdditionalInfo(): ?string
    {
        return $this->additional_info;
    }

    public function getAssignedById(): ?string
    {
        return $this->assigned_by_id;
    }

    public function getBankDetailId(): ?string
    {
        return $this->bank_detail_id;
    }

    public function getBegindate(): ?string
    {
        return $this->begindate;
    }

    public function getCategoryId(): ?string
    {
        return $this->category_id;
    }

    public function getClosed(): ?string
    {
        return $this->closed;
    }

    public function getClosedate(): ?string
    {
        return $this->closedate;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function getCompanyId(): ?string
    {
        return $this->company_id;
    }

    public function getContactId(): ?string
    {
        return $this->contact_id;
    }

    public function getContactIds(): ?array
    {
        return $this->contact_ids;
    }

    public function getCreatedById(): ?string
    {
        return $this->created_by_id;
    }

    public function getCurrencyId(): ?string
    {
        return $this->currency_id;
    }

    public function getDateCreate(): ?string
    {
        return $this->date_create;
    }

    public function getDateModify(): ?string
    {
        return $this->date_modify;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIsNew(): ?string
    {
        return $this->is_new;
    }

    public function getIsRecurring(): ?string
    {
        return $this->is_recurring;
    }

    public function getIsReturnCustomer(): ?string
    {
        return $this->is_return_customer;
    }

    public function getLeadId(): ?string
    {
        return $this->lead_id;
    }

    public function getLocationId(): ?string
    {
        return $this->location_id;
    }

    public function getModifyById(): ?string
    {
        return $this->modify_by_id;
    }

    public function getMovedById(): ?string
    {
        return $this->moved_by_id;
    }

    public function getMovedTime(): ?string
    {
        return $this->moved_time;
    }

    public function getOpened(): ?string
    {
        return $this->opened;
    }

    public function getOpportunity(): ?string
    {
        return $this->opportunity;
    }

    public function getOriginatorId(): ?string
    {
        return $this->originator_id;
    }

    public function getOriginId(): ?string
    {
        return $this->origin_id;
    }

    public function getProbability(): ?string
    {
        return $this->probability;
    }

    public function getQuoteId(): ?string
    {
        return $this->quote_id;
    }

    public function getRequisiteId(): ?string
    {
        return $this->requisite_id;
    }

    public function getStageId(): ?string
    {
        return $this->stage_id;
    }

    public function getStageSemanticId(): ?string
    {
        return $this->stage_semantic_id;
    }

    public function getSourceId(): ?string
    {
        return $this->source_id;
    }

    public function getSourceDescription(): ?string
    {
        return $this->source_description;
    }

    public function getTaxValue(): ?string
    {
        return $this->tax_value;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getTypeId(): ?string
    {
        return $this->type_id;
    }

    public function getUtmCampaign(): ?string
    {
        return $this->utm_campaign;
    }

    public function getUtmContent(): ?string
    {
        return $this->utm_content;
    }

    public function getUtmMedium(): ?string
    {
        return $this->utm_medium;
    }

    public function getUtmSource(): ?string
    {
        return $this->utm_source;
    }

    public function getUtmTerm(): ?string
    {
        return $this->utm_term;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['ADDITIONAL_INFO'] ?? null,
            $data['ASSIGNED_BY_ID'] ?? null,
            $data['BANK_DETAIL_ID'] ?? null,
            $data['BEGINDATE'] ?? null,
            $data['CATEGORY_ID'] ?? null,
            $data['CLOSED'] ?? null,
            $data['CLOSEDATE'] ?? null,
            $data['COMMENTS'] ?? null,
            $data['COMPANY_ID'] ?? null,
            $data['CONTACT_ID'] ?? null,
            $data['CONTACT_IDS'] ?? null,
            $data['CREATED_BY_ID'] ?? null,
            $data['CURRENCY_ID'] ?? null,
            $data['DATE_CREATE'] ?? null,
            $data['DATE_MODIFY'] ?? null,
            $data['ID'] ?? null,
            $data['IS_NEW'] ?? null,
            $data['IS_RECURRING'] ?? null,
            $data['IS_RETURN_CUSTOMER'] ?? null,
            $data['LEAD_ID'] ?? null,
            $data['LOCATION_ID'] ?? null,
            $data['MODIFY_BY_ID'] ?? null,
            $data['MOVED_BY_ID'] ?? null,
            $data['MOVED_TIME'] ?? null,
            $data['OPENED'] ?? null,
            $data['OPPORTUNITY'] ?? null,
            $data['ORIGINATOR_ID'] ?? null,
            $data['ORIGIN_ID'] ?? null,
            $data['PROBABILITY'] ?? null,
            $data['QUOTE_ID'] ?? null,
            $data['REQUISITE_ID'] ?? null,
            $data['STAGE_ID'] ?? null,
            $data['STAGE_SEMANTIC_ID'] ?? null,
            $data['SOURCE_ID'] ?? null,
            $data['SOURCE_DESCRIPTION'] ?? null,
            $data['TAX_VALUE'] ?? null,
            $data['TITLE'] ?? null,
            $data['TYPE_ID'] ?? null,
            $data['UTM_CAMPAIGN'] ?? null,
            $data['UTM_CONTENT'] ?? null,
            $data['UTM_MEDIUM'] ?? null,
            $data['UTM_SOURCE'] ?? null,
            $data['UTM_TERM'] ?? null
        );
    }

    public function toArray(): array
    {
        $properties = get_object_vars($this);
        $result = [];
        foreach ($properties as $property => $value) {
            $result[$property] = $value;
        }
        return $result;
    }

    public function getRequestData(): array
    {
        return array_filter($this->toArray());
    }

}