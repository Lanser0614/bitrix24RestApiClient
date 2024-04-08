<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client\BitrixEntity;

class CompanyDTO
{
    public function __construct(
        private ?string $address = null,
        private ?string $address2 = null,
        private ?string $addressCity = null,
        private ?string $addressCountry = null,
        private ?string $addressCountryCode = null,
        private ?string $addressLegal = null,
        private ?string $addressPostalCode = null,
        private ?string $addressProvince = null,
        private ?string $addressRegion = null,
        private ?string $assignedById = null,
        private ?string $bankingDetails = null,
        private ?string $comments = null,
        private ?string $companyType = null,
        private ?string $createdById = null,
        private ?string $currencyId = null,
        private ?string $dateCreate = null,
        private ?string $dateModify = null,
        private ?array  $email = null,
        private ?string $employees = null,
        private ?string $hasEmail = null,
        private ?string $hasPhone = null,
        private ?string $id = null,
        private ?array  $im = null,
        private ?string $industry = null,
        private ?string $isMyCompany = null,
        private ?string $leadId = null,
        private ?string $logo = null,
        private ?string $modifyById = null,
        private ?string $opened = null,
        private ?string $originatorId = null,
        private ?string $originId = null,
        private ?string $originVersion = null,
        private ?array  $phone = null,
        private ?string $regAddress = null,
        private ?string $regAddress2 = null,
        private ?string $regAddressCity = null,
        private ?string $regAddressCountry = null,
        private ?string $regAddressCountryCode = null,
        private ?string $regAddressLegal = null,
        private ?string $regAddressPostalCode = null,
        private ?string $regAddressProvince = null,
        private ?string $regAddressRegion = null,
        private ?string $revenue = null,
        private ?string $title = null,
        private ?string $utmCampaign = null,
        private ?string $utmContent = null,
        private ?string $utmMedium = null,
        private ?string $utmSource = null,
        private ?string $utmTerm = null,
        private ?array  $web = null
    )
    {
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): CompanyDTO
    {
        $this->address = $address;
        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): CompanyDTO
    {
        $this->address2 = $address2;
        return $this;
    }

    public function getAddressCity(): ?string
    {
        return $this->addressCity;
    }

    public function setAddressCity(?string $addressCity): CompanyDTO
    {
        $this->addressCity = $addressCity;
        return $this;
    }

    public function getAddressCountry(): ?string
    {
        return $this->addressCountry;
    }

    public function setAddressCountry(?string $addressCountry): CompanyDTO
    {
        $this->addressCountry = $addressCountry;
        return $this;
    }

    public function getAddressCountryCode(): ?string
    {
        return $this->addressCountryCode;
    }

    public function setAddressCountryCode(?string $addressCountryCode): CompanyDTO
    {
        $this->addressCountryCode = $addressCountryCode;
        return $this;
    }

    public function getAddressLegal(): ?string
    {
        return $this->addressLegal;
    }

    public function setAddressLegal(?string $addressLegal): CompanyDTO
    {
        $this->addressLegal = $addressLegal;
        return $this;
    }

    public function getAddressPostalCode(): ?string
    {
        return $this->addressPostalCode;
    }

    public function setAddressPostalCode(?string $addressPostalCode): CompanyDTO
    {
        $this->addressPostalCode = $addressPostalCode;
        return $this;
    }

    public function getAddressProvince(): ?string
    {
        return $this->addressProvince;
    }

    public function setAddressProvince(?string $addressProvince): CompanyDTO
    {
        $this->addressProvince = $addressProvince;
        return $this;
    }

    public function getAddressRegion(): ?string
    {
        return $this->addressRegion;
    }

    public function setAddressRegion(?string $addressRegion): CompanyDTO
    {
        $this->addressRegion = $addressRegion;
        return $this;
    }

    public function getAssignedById(): ?string
    {
        return $this->assignedById;
    }

    public function setAssignedById(?string $assignedById): CompanyDTO
    {
        $this->assignedById = $assignedById;
        return $this;
    }

    public function getBankingDetails(): ?string
    {
        return $this->bankingDetails;
    }

    public function setBankingDetails(?string $bankingDetails): CompanyDTO
    {
        $this->bankingDetails = $bankingDetails;
        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): CompanyDTO
    {
        $this->comments = $comments;
        return $this;
    }

    public function getCompanyType(): ?string
    {
        return $this->companyType;
    }

    public function setCompanyType(?string $companyType): CompanyDTO
    {
        $this->companyType = $companyType;
        return $this;
    }

    public function getCreatedById(): ?string
    {
        return $this->createdById;
    }

    public function setCreatedById(?string $createdById): CompanyDTO
    {
        $this->createdById = $createdById;
        return $this;
    }

    public function getCurrencyId(): ?string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(?string $currencyId): CompanyDTO
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    public function getDateCreate(): ?string
    {
        return $this->dateCreate;
    }

    public function setDateCreate(?string $dateCreate): CompanyDTO
    {
        $this->dateCreate = $dateCreate;
        return $this;
    }

    public function getDateModify(): ?string
    {
        return $this->dateModify;
    }

    public function setDateModify(?string $dateModify): CompanyDTO
    {
        $this->dateModify = $dateModify;
        return $this;
    }

    public function getEmail(): ?array
    {
        return $this->email;
    }

    public function setEmail(?array $email): CompanyDTO
    {
        $this->email = $email;
        return $this;
    }

    public function getEmployees(): ?string
    {
        return $this->employees;
    }

    public function setEmployees(?string $employees): CompanyDTO
    {
        $this->employees = $employees;
        return $this;
    }

    public function getHasEmail(): ?string
    {
        return $this->hasEmail;
    }

    public function setHasEmail(?string $hasEmail): CompanyDTO
    {
        $this->hasEmail = $hasEmail;
        return $this;
    }

    public function getHasPhone(): ?string
    {
        return $this->hasPhone;
    }

    public function setHasPhone(?string $hasPhone): CompanyDTO
    {
        $this->hasPhone = $hasPhone;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): CompanyDTO
    {
        $this->id = $id;
        return $this;
    }

    public function getIm(): ?array
    {
        return $this->im;
    }

    public function setIm(?array $im): CompanyDTO
    {
        $this->im = $im;
        return $this;
    }

    public function getIndustry(): ?string
    {
        return $this->industry;
    }

    public function setIndustry(?string $industry): CompanyDTO
    {
        $this->industry = $industry;
        return $this;
    }

    public function getIsMyCompany(): ?string
    {
        return $this->isMyCompany;
    }

    public function setIsMyCompany(?string $isMyCompany): CompanyDTO
    {
        $this->isMyCompany = $isMyCompany;
        return $this;
    }

    public function getLeadId(): ?string
    {
        return $this->leadId;
    }

    public function setLeadId(?string $leadId): CompanyDTO
    {
        $this->leadId = $leadId;
        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): CompanyDTO
    {
        $this->logo = $logo;
        return $this;
    }

    public function getModifyById(): ?string
    {
        return $this->modifyById;
    }

    public function setModifyById(?string $modifyById): CompanyDTO
    {
        $this->modifyById = $modifyById;
        return $this;
    }

    public function getOpened(): ?string
    {
        return $this->opened;
    }

    public function setOpened(?string $opened): CompanyDTO
    {
        $this->opened = $opened;
        return $this;
    }

    public function getOriginatorId(): ?string
    {
        return $this->originatorId;
    }

    public function setOriginatorId(?string $originatorId): CompanyDTO
    {
        $this->originatorId = $originatorId;
        return $this;
    }

    public function getOriginId(): ?string
    {
        return $this->originId;
    }

    public function setOriginId(?string $originId): CompanyDTO
    {
        $this->originId = $originId;
        return $this;
    }

    public function getOriginVersion(): ?string
    {
        return $this->originVersion;
    }

    public function setOriginVersion(?string $originVersion): CompanyDTO
    {
        $this->originVersion = $originVersion;
        return $this;
    }

    public function getPhone(): ?array
    {
        return $this->phone;
    }

    public function setPhone(?array $phone): CompanyDTO
    {
        $this->phone = $phone;
        return $this;
    }

    public function getRegAddress(): ?string
    {
        return $this->regAddress;
    }

    public function setRegAddress(?string $regAddress): CompanyDTO
    {
        $this->regAddress = $regAddress;
        return $this;
    }

    public function getRegAddress2(): ?string
    {
        return $this->regAddress2;
    }

    public function setRegAddress2(?string $regAddress2): CompanyDTO
    {
        $this->regAddress2 = $regAddress2;
        return $this;
    }

    public function getRegAddressCity(): ?string
    {
        return $this->regAddressCity;
    }

    public function setRegAddressCity(?string $regAddressCity): CompanyDTO
    {
        $this->regAddressCity = $regAddressCity;
        return $this;
    }

    public function getRegAddressCountry(): ?string
    {
        return $this->regAddressCountry;
    }

    public function setRegAddressCountry(?string $regAddressCountry): CompanyDTO
    {
        $this->regAddressCountry = $regAddressCountry;
        return $this;
    }

    public function getRegAddressCountryCode(): ?string
    {
        return $this->regAddressCountryCode;
    }

    public function setRegAddressCountryCode(?string $regAddressCountryCode): CompanyDTO
    {
        $this->regAddressCountryCode = $regAddressCountryCode;
        return $this;
    }

    public function getRegAddressLegal(): ?string
    {
        return $this->regAddressLegal;
    }

    public function setRegAddressLegal(?string $regAddressLegal): CompanyDTO
    {
        $this->regAddressLegal = $regAddressLegal;
        return $this;
    }

    public function getRegAddressPostalCode(): ?string
    {
        return $this->regAddressPostalCode;
    }

    public function setRegAddressPostalCode(?string $regAddressPostalCode): CompanyDTO
    {
        $this->regAddressPostalCode = $regAddressPostalCode;
        return $this;
    }

    public function getRegAddressProvince(): ?string
    {
        return $this->regAddressProvince;
    }

    public function setRegAddressProvince(?string $regAddressProvince): CompanyDTO
    {
        $this->regAddressProvince = $regAddressProvince;
        return $this;
    }

    public function getRegAddressRegion(): ?string
    {
        return $this->regAddressRegion;
    }

    public function setRegAddressRegion(?string $regAddressRegion): CompanyDTO
    {
        $this->regAddressRegion = $regAddressRegion;
        return $this;
    }

    public function getRevenue(): ?string
    {
        return $this->revenue;
    }

    public function setRevenue(?string $revenue): CompanyDTO
    {
        $this->revenue = $revenue;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): CompanyDTO
    {
        $this->title = $title;
        return $this;
    }

    public function getUtmCampaign(): ?string
    {
        return $this->utmCampaign;
    }

    public function setUtmCampaign(?string $utmCampaign): CompanyDTO
    {
        $this->utmCampaign = $utmCampaign;
        return $this;
    }

    public function getUtmContent(): ?string
    {
        return $this->utmContent;
    }

    public function setUtmContent(?string $utmContent): CompanyDTO
    {
        $this->utmContent = $utmContent;
        return $this;
    }

    public function getUtmMedium(): ?string
    {
        return $this->utmMedium;
    }

    public function setUtmMedium(?string $utmMedium): CompanyDTO
    {
        $this->utmMedium = $utmMedium;
        return $this;
    }

    public function getUtmSource(): ?string
    {
        return $this->utmSource;
    }

    public function setUtmSource(?string $utmSource): CompanyDTO
    {
        $this->utmSource = $utmSource;
        return $this;
    }

    public function getUtmTerm(): ?string
    {
        return $this->utmTerm;
    }

    public function setUtmTerm(?string $utmTerm): CompanyDTO
    {
        $this->utmTerm = $utmTerm;
        return $this;
    }

    public function getWeb(): ?array
    {
        return $this->web;
    }

    public function setWeb(?array $web): CompanyDTO
    {
        $this->web = $web;
        return $this;
    }

    public static function fromArray(array $data): self
    {
        $dto = new self();
        foreach ($data as $key => $value) {
            // Convert keys to lowercase to match property names
            $key = strtolower($key);
            // Check if property exists before assigning the value
            if (property_exists($dto, $key)) {
                $dto->$key = $value;
            }
        }
        return $dto;
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