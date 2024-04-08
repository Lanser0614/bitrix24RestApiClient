<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\BitrixEntity;

class ContactDTO
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
        private ?array  $company_ids = null,
        private ?string $created_by_id = null,
        private ?string $date_create = null,
        private ?string $date_modify = null,
        private ?array  $email = null,
        private ?string $export = null,
        private ?string $face_id = null,
        private ?string $has_email = null,
        private ?string $has_phone = null,
        private ?string $honorific = null,
        private ?string $id = null,
        private ?array  $im = null,
        private ?string $last_name = null,
        private ?string $lead_id = null,
        private ?string $modify_by_id = null,
        private ?string $name = null,
        private ?string $opened = null,
        private ?string $originator_id = null,
        private ?string $origin_id = null,
        private ?string $origin_version = null,
        private ?array  $phone = null,
        private ?string $photo = null,
        private ?string $post = null,
        private ?string $second_name = null,
        private ?string $source_description = null,
        private ?string $source_id = null,
        private ?string $type_id = null,
        private ?string $utm_campaign = null,
        private ?string $utm_content = null,
        private ?string $utm_medium = null,
        private ?string $utm_source = null,
        private ?string $utm_term = null,
        private ?array  $web = null,
    )
    {
    }

    public function setAddress(?string $address): ContactDTO
    {
        $this->address = $address;
        return $this;
    }

    public function setAddress2(?string $address_2): ContactDTO
    {
        $this->address_2 = $address_2;
        return $this;
    }

    public function setAddressCity(?string $address_city): ContactDTO
    {
        $this->address_city = $address_city;
        return $this;
    }

    public function setAddressCountry(?string $address_country): ContactDTO
    {
        $this->address_country = $address_country;
        return $this;
    }

    public function setAddressCountryCode(?string $address_country_code): ContactDTO
    {
        $this->address_country_code = $address_country_code;
        return $this;
    }

    public function setAddressPostalCode(?string $address_postal_code): ContactDTO
    {
        $this->address_postal_code = $address_postal_code;
        return $this;
    }

    public function setAddressProvince(?string $address_province): ContactDTO
    {
        $this->address_province = $address_province;
        return $this;
    }

    public function setAddressRegion(?string $address_region): ContactDTO
    {
        $this->address_region = $address_region;
        return $this;
    }

    public function setAssignedById(?string $assigned_by_id): ContactDTO
    {
        $this->assigned_by_id = $assigned_by_id;
        return $this;
    }

    public function setBirthdate(?string $birthdate): ContactDTO
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function setComments(?string $comments): ContactDTO
    {
        $this->comments = $comments;
        return $this;
    }

    public function setCompanyId(?string $company_id): ContactDTO
    {
        $this->company_id = $company_id;
        return $this;
    }

    public function setCompanyIds(?array $company_ids): ContactDTO
    {
        $this->company_ids = $company_ids;
        return $this;
    }

    public function setCreatedById(?string $created_by_id): ContactDTO
    {
        $this->created_by_id = $created_by_id;
        return $this;
    }

    public function setDateCreate(?string $date_create): ContactDTO
    {
        $this->date_create = $date_create;
        return $this;
    }

    public function setDateModify(?string $date_modify): ContactDTO
    {
        $this->date_modify = $date_modify;
        return $this;
    }

    public function setEmail(?array $email): ContactDTO
    {
        $this->email = $email;
        return $this;
    }

    public function setExport(?string $export): ContactDTO
    {
        $this->export = $export;
        return $this;
    }

    public function setFaceId(?string $face_id): ContactDTO
    {
        $this->face_id = $face_id;
        return $this;
    }

    public function setHasEmail(?string $has_email): ContactDTO
    {
        $this->has_email = $has_email;
        return $this;
    }

    public function setHasPhone(?string $has_phone): ContactDTO
    {
        $this->has_phone = $has_phone;
        return $this;
    }

    public function setHonorific(?string $honorific): ContactDTO
    {
        $this->honorific = $honorific;
        return $this;
    }

    public function setId(?string $id): ContactDTO
    {
        $this->id = $id;
        return $this;
    }

    public function setIm(?array $im): ContactDTO
    {
        $this->im = $im;
        return $this;
    }

    public function setLastName(?string $last_name): ContactDTO
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function setLeadId(?string $lead_id): ContactDTO
    {
        $this->lead_id = $lead_id;
        return $this;
    }

    public function setModifyById(?string $modify_by_id): ContactDTO
    {
        $this->modify_by_id = $modify_by_id;
        return $this;
    }

    public function setName(?string $name): ContactDTO
    {
        $this->name = $name;
        return $this;
    }

    public function setOpened(?string $opened): ContactDTO
    {
        $this->opened = $opened;
        return $this;
    }

    public function setOriginatorId(?string $originator_id): ContactDTO
    {
        $this->originator_id = $originator_id;
        return $this;
    }

    public function setOriginId(?string $origin_id): ContactDTO
    {
        $this->origin_id = $origin_id;
        return $this;
    }

    public function setOriginVersion(?string $origin_version): ContactDTO
    {
        $this->origin_version = $origin_version;
        return $this;
    }

    public function setPhone(?array $phone): ContactDTO
    {
        $this->phone = $phone;
        return $this;
    }

    public function setPhoto(?string $photo): ContactDTO
    {
        $this->photo = $photo;
        return $this;
    }

    public function setPost(?string $post): ContactDTO
    {
        $this->post = $post;
        return $this;
    }

    public function setSecondName(?string $second_name): ContactDTO
    {
        $this->second_name = $second_name;
        return $this;
    }

    public function setSourceDescription(?string $source_description): ContactDTO
    {
        $this->source_description = $source_description;
        return $this;
    }

    public function setSourceId(?string $source_id): ContactDTO
    {
        $this->source_id = $source_id;
        return $this;
    }

    public function setTypeId(?string $type_id): ContactDTO
    {
        $this->type_id = $type_id;
        return $this;
    }

    public function setUtmCampaign(?string $utm_campaign): ContactDTO
    {
        $this->utm_campaign = $utm_campaign;
        return $this;
    }

    public function setUtmContent(?string $utm_content): ContactDTO
    {
        $this->utm_content = $utm_content;
        return $this;
    }

    public function setUtmMedium(?string $utm_medium): ContactDTO
    {
        $this->utm_medium = $utm_medium;
        return $this;
    }

    public function setUtmSource(?string $utm_source): ContactDTO
    {
        $this->utm_source = $utm_source;
        return $this;
    }

    public function setUtmTerm(?string $utm_term): ContactDTO
    {
        $this->utm_term = $utm_term;
        return $this;
    }

    public function setWeb(?array $web): ContactDTO
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

    public function getCompanyIds(): ?array
    {
        return $this->company_ids;
    }

    public function getCreatedById(): ?string
    {
        return $this->created_by_id;
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

    public function getExport(): ?string
    {
        return $this->export;
    }

    public function getFaceId(): ?string
    {
        return $this->face_id;
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

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function getLeadId(): ?string
    {
        return $this->lead_id;
    }

    public function getModifyById(): ?string
    {
        return $this->modify_by_id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getOpened(): ?string
    {
        return $this->opened;
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

    public function getPhoto(): ?string
    {
        return $this->photo;
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
            $data['COMPANY_IDS'] ?? null,
            $data['CREATED_BY_ID'] ?? null,
            $data['DATE_CREATE'] ?? null,
            $data['DATE_MODIFY'] ?? null,
            $data['EMAIL'] ?? null,
            $data['EXPORT'] ?? null,
            $data['FACE_ID'] ?? null,
            $data['HAS_EMAIL'] ?? null,
            $data['HAS_PHONE'] ?? null,
            $data['HONORIFIC'] ?? null,
            $data['ID'] ?? null,
            $data['IM'] ?? null,
            $data['LAST_NAME'] ?? null,
            $data['LEAD_ID'] ?? null,
            $data['MODIFY_BY_ID'] ?? null,
            $data['NAME'] ?? null,
            $data['OPENED'] ?? null,
            $data['ORIGINATOR_ID'] ?? null,
            $data['ORIGIN_ID'] ?? null,
            $data['ORIGIN_VERSION'] ?? null,
            $data['PHONE'] ?? null,
            $data['PHOTO'] ?? null,
            $data['POST'] ?? null,
            $data['SECOND_NAME'] ?? null,
            $data['SOURCE_DESCRIPTION'] ?? null,
            $data['SOURCE_ID'] ?? null,
            $data['TYPE_ID'] ?? null,
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
            $result[$property] = $value;
        }
        return $result;
    }

    public function getRequestData(): array
    {
        return array_filter($this->toArray());
    }
}