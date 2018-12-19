<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Entity;

class IdentificationRawInfo
{
    private $token;
    private $created;
    private $email;
    private $phone;
    private $ip;
    private $compareScore;
    private $mediaFiles = [];

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): IdentificationRawInfo
    {
        $this->token = $token;

        return $this;
    }

    public function getCreated(): string
    {
        return $this->created;
    }

    public function setCreated(string $created): IdentificationRawInfo
    {
        $this->created = $created;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): IdentificationRawInfo
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): IdentificationRawInfo
    {
        $this->phone = $phone;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): IdentificationRawInfo
    {
        $this->ip = $ip;

        return $this;
    }

    public function getCompareScore(): int
    {
        return $this->compareScore;
    }

    public function setCompareScore(int $compareScore): IdentificationRawInfo
    {
        $this->compareScore = $compareScore;

        return $this;
    }

    /**
     * @return array|MediaFile[]
     */
    public function getMediaFiles(): array
    {
        return $this->mediaFiles;
    }

    public function addMediaFile(MediaFile $mediaFile): IdentificationRawInfo
    {
        $this->mediaFiles[] = $mediaFile;

        return $this;
    }
}