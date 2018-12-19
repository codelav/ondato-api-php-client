<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class ParsedDocumentData
{
    const DOCUMENT_TYPE_IDENTITY_CARD = 1;
    const DOCUMENT_TYPE_PASSPORT = 2;
    const DOCUMENT_TYPE_RESIDENCE_PERMIT = 3;
    const DOCUMENT_TYPE_DRIVER_LICENCE = 4;
    const DOCUMENT_TYPE_LOCAL_PASSPORT = 5;
    const DOCUMENT_TYPE_SOCIAL_ID = 6;
    const DOCUMENT_TYPE_OTHER = 7;

    private $personCode;
    private $birthDate;
    private $firstName;
    private $lastName;
    private $documentNumber;
    private $documentType;
    private $expireDate;
    private $country;
    private $nationality;

    public function getPersonCode(): ?string
    {
        return $this->personCode;
    }

    public function setPersonCode(string $personCode): ParsedDocumentData
    {
        $this->personCode = $personCode;

        return $this;
    }

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function setBirthDate(string $birthDate): ParsedDocumentData
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): ParsedDocumentData
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): ParsedDocumentData
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }

    public function setDocumentNumber(string $documentNumber): ParsedDocumentData
    {
        $this->documentNumber = $documentNumber;

        return $this;
    }

    public function getDocumentType(): ?int
    {
        return $this->documentType;
    }

    public function setDocumentType(int $documentType): ParsedDocumentData
    {
        $this->documentType = $documentType;

        return $this;
    }

    public function getExpireDate(): ?string
    {
        return $this->expireDate;
    }

    public function setExpireDate(string $expireDate): ParsedDocumentData
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): ParsedDocumentData
    {
        $this->country = $country;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): ParsedDocumentData
    {
        $this->nationality = $nationality;

        return $this;
    }
}