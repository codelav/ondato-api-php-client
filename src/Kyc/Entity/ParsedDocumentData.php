<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class ParsedDocumentData
{
    private $personCode;
    private $birthDate;
    private $firstName;
    private $middleName;
    private $lastName;
    private $documentNumber;
    private $documentType;
    private $expireDate;
    private $issueDate;
    private $country;
    private $nationality;
    private $gender;
    private $address;

    public function getPersonCode(): ?string
    {
        return $this->personCode;
    }

    public function setPersonCode(string $personCode): ParsedDocumentData
    {
        $this->personCode = $personCode;

        return $this;
    }

    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }

    public function setIssueDate($issueDate): ParsedDocumentData
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender($gender): ParsedDocumentData
    {
        $this->gender = $gender;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress($address): ParsedDocumentData
    {
        $this->address = $address;

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

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(string $middleName): ParsedDocumentData
    {
        $this->middleName = $middleName;

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

    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }

    public function setDocumentType(string $documentType): ParsedDocumentData
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
