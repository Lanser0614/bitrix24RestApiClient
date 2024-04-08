<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\BitrixEntity;

class LeadDTO
{
    public function __construct(
        private ?string $address = null,
        private ?string $address_2 = null,
        private ?string $address_city = null,
        private ?string $address_country = null,
        private ?string $address_country_code = null,
        private ?string $address_postal_code = null,
        private ?string $address_province = null,
        private ?string $address_region = null,
        private ?string $assigned_by_id = null,
        private ?string $birthdate = null,
        private ?string $comments = null,
        private ?string $company_id = null,
        private ?string $company_title = null,
        private ?string $contact_id = null,
        private ?array  $contact_ids = null,
        private ?string $created_by_id = null,
        private ?string $currency_id = null,
        private ?string $date_closed = null,
        private ?string $date_create = null,
        private ?string $date_modify = null,
        private ?array  $email = null,
        private ?string $has_email = null,
        private ?string $has_phone = null,
        private ?string $honorific = null,
        private ?string $id = null,
        private ?array  $im = null,
        private ?string $is_return_customer = null,
        private ?string $last_name = null,
        private ?string $modify_by_id = null,
        private ?string $moved_by_id = null,
        private ?string $moved_time = null,
        private ?string $name = null,
        private ?string $opened = null,
        private ?string $opportunity = null,
        private ?string $originator_id = null,
        private ?string $origin_id = null,
        private ?string $origin_version = null,
        private ?array  $phone = null,
        private ?string $post = null,
        private ?string $second_name = null,
        private ?string $source_description = null,
        private ?string $source_id = null,
        private ?string $status_description = null,
        private ?string $status_id = null,
        private ?string $status_semantic_id = null,
        private ?string $title = null,
        private ?string $utm_campaign = null,
        private ?string $utm_content = null,
        private ?string $utm_medium = null,
        private ?string $utm_source = null,
        private ?string $utm_term = null,
        private ?array  $web = null,
    )
    {
    }

    public function setAddress(?string $address): LeadDTO
    {
        $this->address = $address;
        return $this;
    }

    public function setAddress2(?string $address_2): LeadDTO
    {
        $this->address_2 = $address_2;
        return $this;
    }

    public function setAddressCity(?string $address_city): LeadDTO
    {
        $this->address_city = $address_city;
        return $this;
    }

    public function setAddressCountry(?string $address_country): LeadDTO
    {
        $this->address_country = $address_country;
        return $this;
    }

    public function setAddressCountryCode(?string $address_country_code): LeadDTO
    {
        $this->address_country_code = $address_country_code;
        return $this;
    }

    public function setAddressPostalCode(?string $address_postal_code): LeadDTO
    {
        $this->address_postal_code = $address_postal_code;
        return $this;
    }

    public function setAddressProvince(?string $address_province): LeadDTO
    {
        $this->address_province = $address_province;
        return $this;
    }

    public function setAddressRegion(?string $address_region): LeadDTO
    {
        $this->address_region = $address_region;
        return $this;
    }

    public function setAssignedById(?string $assigned_by_id): LeadDTO
    {
        $this->assigned_by_id = $assigned_by_id;
        return $this;
    }

    public function setBirthdate(?string $birthdate): LeadDTO
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function setComments(?string $comments): LeadDTO
    {
        $this->comments = $comments;
        return $this;
    }

    public function setCompanyId(?string $company_id): LeadDTO
    {
        $this->company_id = $company_id;
        return $this;
    }

    public function setCompanyTitle(?string $company_title): LeadDTO
    {
        $this->company_title = $company_title;
        return $this;
    }

    public function setContactId(?string $contact_id): LeadDTO
    {
        $this->contact_id = $contact_id;
        return $this;
    }

    public function setContactIds(?array $contact_ids): LeadDTO
    {
        $this->contact_ids = $contact_ids;
        return $this;
    }

    public function setCreatedById(?string $created_by_id): LeadDTO
    {
        $this->created_by_id = $created_by_id;
        return $this;
    }

    public function setCurrencyId(?string $currency_id): LeadDTO
    {
        $this->currency_id = $currency_id;
        return $this;
    }

    public function setDateClosed(?string $date_closed): LeadDTO
    {
        $this->date_closed = $date_closed;
        return $this;
    }

    public function setDateCreate(?string $date_create): LeadDTO
    {
        $this->date_create = $date_create;
        return $this;
    }

    public function setDateModify(?string $date_modify): LeadDTO
    {
        $this->date_modify = $date_modify;
        return $this;
    }

    public function setEmail(?array $email): LeadDTO
    {
        $this->email = $email;
        return $this;
    }

    public function setHasEmail(?string $has_email): LeadDTO
    {
        $this->has_email = $has_email;
        return $this;
    }

    public function setHasPhone(?string $has_phone): LeadDTO
    {
        $this->has_phone = $has_phone;
        return $this;
    }

    public function setHonorific(?string $honorific): LeadDTO
    {
        $this->honorific = $honorific;
        return $this;
    }

    public function setId(?string $id): LeadDTO
    {
        $this->id = $id;
        return $this;
    }

    public function setIm(?array $im): LeadDTO
    {
        $this->im = $im;
        return $this;
    }

    public function setIsReturnCustomer(?string $is_return_customer): LeadDTO
    {
        $this->is_return_customer = $is_return_customer;
        return $this;
    }

    public function setLastName(?string $last_name): LeadDTO
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function setModifyById(?string $modify_by_id): LeadDTO
    {
        $this->modify_by_id = $modify_by_id;
        return $this;
    }

    public function setMovedById(?string $moved_by_id): LeadDTO
    {
        $this->moved_by_id = $moved_by_id;
        return $this;
    }

    public function setMovedTime(?string $moved_time): LeadDTO
    {
        $this->moved_time = $moved_time;
        return $this;
    }

    public function setName(?string $name): LeadDTO
    {
        $this->name = $name;
        return $this;
    }

    public function setOpened(?string $opened): LeadDTO
    {
        $this->opened = $opened;
        return $this;
    }

    public function setOpportunity(?string $opportunity): LeadDTO
    {
        $this->opportunity = $opportunity;
        return $this;
    }

    public function setOriginatorId(?string $originator_id): LeadDTO
    {
        $this->originator_id = $originator_id;
        return $this;
    }

    public function setOriginId(?string $origin_id): LeadDTO
    {
        $this->origin_id = $origin_id;
        return $this;
    }

    public function setOriginVersion(?string $origin_version): LeadDTO
    {
        $this->origin_version = $origin_version;
        return $this;
    }

    public function setPhone(?array $phone): LeadDTO
    {
        $this->phone = $phone;
        return $this;
    }

    public function setPost(?string $post): LeadDTO
    {
        $this->post = $post;
        return $this;
    }

    public function setSecondName(?string $second_name): LeadDTO
    {
        $this->second_name = $second_name;
        return $this;
    }

    public function setSourceDescription(?string $source_description): LeadDTO
    {
        $this->source_description = $source_description;
        return $this;
    }

    public function setSourceId(?string $source_id): LeadDTO
    {
        $this->source_id = $source_id;
        return $this;
    }

    public function setStatusDescription(?string $status_description): LeadDTO
    {
        $this->status_description = $status_description;
        return $this;
    }

    public function setStatusId(?string $status_id): LeadDTO
    {
        $this->status_id = $status_id;
        return $this;
    }

    public function setStatusSemanticId(?string $status_semantic_id): LeadDTO
    {
        $this->status_semantic_id = $status_semantic_id;
        return $this;
    }

    public function setTitle(?string $title): LeadDTO
    {
        $this->title = $title;
        return $this;
    }

    public function setUtmCampaign(?string $utm_campaign): LeadDTO
    {
        $this->utm_campaign = $utm_campaign;
        return $this;
    }

    public function setUtmContent(?string $utm_content): LeadDTO
    {
        $this->utm_content = $utm_content;
        return $this;
    }

    public function setUtmMedium(?string $utm_medium): LeadDTO
    {
        $this->utm_medium = $utm_medium;
        return $this;
    }

    public function setUtmSource(?string $utm_source): LeadDTO
    {
        $this->utm_source = $utm_source;
        return $this;
    }

    public function setUtmTerm(?string $utm_term): LeadDTO
    {
        $this->utm_term = $utm_term;
        return $this;
    }

    public function setWeb(?array $web): LeadDTO
    {
        $this->web = $web;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function getAddress2(): ?string
    {
        return $this->address_2;
    }

    public function getAddressCity(): ?string
    {
        return $this->address_city;
    }

    public function getAddressCountry(): ?string
    {
        return $this->address_country;
    }

    public function getAddressCountryCode(): ?string
    {
        return $this->address_country_code;
    }

    public function getAddressPostalCode(): ?string
    {
        return $this->address_postal_code;
    }

    public function getAddressProvince(): ?string
    {
        return $this->address_province;
    }

    public function getAddressRegion(): ?string
    {
        return $this->address_region;
    }

    public function getAssignedById(): ?string
    {
        return $this->assigned_by_id;
    }

    public function getBirthdate(): ?string
    {
        return $this->birthdate;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function getCompanyId(): ?string
    {
        return $this->company_id;
    }

    public function getCompanyTitle(): ?string
    {
        return $this->company_title;
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

    public function getDateClosed(): ?string
    {
        return $this->date_closed;
    }

    public function getDateCreate(): ?string
    {
        return $this->date_create;
    }

    public function getDateModify(): ?string
    {
        return $this->date_modify;
    }

    public function getEmail(): ?array
    {
        return $this->email;
    }

    public function getHasEmail(): ?string
    {
        return $this->has_email;
    }

    public function getHasPhone(): ?string
    {
        return $this->has_phone;
    }

    public function getHonorific(): ?string
    {
        return $this->honorific;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIm(): ?array
    {
        return $this->im;
    }

    public function getIsReturnCustomer(): ?string
    {
        return $this->is_return_customer;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
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

    public function getName(): ?string
    {
        return $this->name;
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

    public function getOriginVersion(): ?string
    {
        return $this->origin_version;
    }

    public function getPhone(): ?array
    {
        return $this->phone;
    }

    public function getPost(): ?string
    {
        return $this->post;
    }

    public function getSecondName(): ?string
    {
        return $this->second_name;
    }

    public function getSourceDescription(): ?string
    {
        return $this->source_description;
    }

    public function getSourceId(): ?string
    {
        return $this->source_id;
    }

    public function getStatusDescription(): ?string
    {
        return $this->status_description;
    }

    public function getStatusId(): ?string
    {
        return $this->status_id;
    }

    public function getStatusSemanticId(): ?string
    {
        return $this->status_semantic_id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
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

    public function getWeb(): ?array
    {
        return $this->web;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['ADDRESS'] ?? null,
            $data['ADDRESS_2'] ?? null,
            $data['ADDRESS_CITY'] ?? null,
            $data['ADDRESS_COUNTRY'] ?? null,
            $data['ADDRESS_COUNTRY_CODE'] ?? null,
            $data['ADDRESS_POSTAL_CODE'] ?? null,
            $data['ADDRESS_PROVINCE'] ?? null,
            $data['ADDRESS_REGION'] ?? null,
            $data['ASSIGNED_BY_ID'] ?? null,
            $data['BIRTHDATE'] ?? null,
            $data['COMMENTS'] ?? null,
            $data['COMPANY_ID'] ?? null,
            $data['COMPANY_TITLE'] ?? null,
            $data['CONTACT_ID'] ?? null,
            $data['CONTACT_IDS'] ?? null,
            $data['CREATED_BY_ID'] ?? null,
            $data['CURRENCY_ID'] ?? null,
            $data['DATE_CLOSED'] ?? null,
            $data['DATE_CREATE'] ?? null,
            $data['DATE_MODIFY'] ?? null,
            $data['EMAIL'] ?? null,
            $data['HAS_EMAIL'] ?? null,
            $data['HAS_PHONE'] ?? null,
            $data['HONORIFIC'] ?? null,
            $data['ID'] ?? null,
            $data['IM'] ?? null,
            $data['IS_RETURN_CUSTOMER'] ?? null,
            $data['LAST_NAME'] ?? null,
            $data['MODIFY_BY_ID'] ?? null,
            $data['MOVED_BY_ID'] ?? null,
            $data['MOVED_TIME'] ?? null,
            $data['NAME'] ?? null,
            $data['OPENED'] ?? null,
            $data['OPPORTUNITY'] ?? null,
            $data['ORIGINATOR_ID'] ?? null,
            $data['ORIGIN_ID'] ?? null,
            $data['ORIGIN_VERSION'] ?? null,
            $data['PHONE'] ?? null,
            $data['POST'] ?? null,
            $data['SECOND_NAME'] ?? null,
            $data['SOURCE_DESCRIPTION'] ?? null,
            $data['SOURCE_ID'] ?? null,
            $data['STATUS_DESCRIPTION'] ?? null,
            $data['STATUS_ID'] ?? null,
            $data['STATUS_SEMANTIC_ID'] ?? null,
            $data['TITLE'] ?? null,
            $data['UTM_CAMPAIGN'] ?? null,
            $data['UTM_CONTENT'] ?? null,
            $data['UTM_MEDIUM'] ?? null,
            $data['UTM_SOURCE'] ?? null,
            $data['UTM_TERM'] ?? null,
            $data['WEB'] ?? null
        );
    }

    public function toArray(): array
    {
        $properties = get_object_vars($this);
        $result = [];
        foreach ($properties as $property => $value) {
            $result[strtoupper($property)] = $value;
        }
        return $result;
    }

    public function getRequestData(): array
    {
        return array_filter($this->toArray());
    }
}