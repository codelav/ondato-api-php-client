<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class SessionData
{
    private $email;
    private $birthDate;
    private $firstName;
    private $lastName;
    private $personCode;
    private $phoneNumber;
    private $language;
    private $nationality;
    private $address;
    private $city;
    private $country;
    private $refId;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): SessionData
    {
        $this->email = $email;

        return $this;
    }

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function setBirthDate(string $birthDate): SessionData
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): SessionData
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): SessionData
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getPersonCode(): ?string
    {
        return $this->personCode;
    }

    public function setPersonCode(string $personCode): SessionData
    {
        $this->personCode = $personCode;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): SessionData
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): SessionData
    {
        $this->language = $language;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): SessionData
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): SessionData
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): SessionData
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): SessionData
    {
        $this->country = $country;

        return $this;
    }

    public function getRefId(): ?string
    {
        return $this->refId;
    }

    public function setRefId(string $refId): SessionData
    {
        $this->refId = $refId;

        return $this;
    }
}