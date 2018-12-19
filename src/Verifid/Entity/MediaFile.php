<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Entity;

class MediaFile
{
    private $id;
    private $token;
    private $created;
    private $fileType;
    private $biometricStatus;
    private $modelRecognitionStatus;
    private $fileExtension;
    private $fileToken;
    private $file;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): MediaFile
    {
        $this->id = $id;

        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): MediaFile
    {
        $this->token = $token;

        return $this;
    }

    public function getCreated(): string
    {
        return $this->created;
    }

    public function setCreated(string $created): MediaFile
    {
        $this->created = $created;

        return $this;
    }

    public function getFileType(): int
    {
        return $this->fileType;
    }

    public function setFileType(int $fileType): MediaFile
    {
        $this->fileType = $fileType;

        return $this;
    }

    public function getBiometricStatus(): ?string
    {
        return $this->biometricStatus;
    }

    public function setBiometricStatus(string $biometricStatus): MediaFile
    {
        $this->biometricStatus = $biometricStatus;

        return $this;
    }

    public function getModelRecognitionStatus(): ?string
    {
        return $this->modelRecognitionStatus;
    }

    public function setModelRecognitionStatus(string $modelRecognitionStatus): MediaFile
    {
        $this->modelRecognitionStatus = $modelRecognitionStatus;

        return $this;
    }

    public function getFileExtension(): string
    {
        return $this->fileExtension;
    }

    public function setFileExtension(string $fileExtension): MediaFile
    {
        $this->fileExtension = $fileExtension;

        return $this;
    }

    public function getFileToken(): string
    {
        return $this->fileToken;
    }

    public function setFileToken(string $fileToken): MediaFile
    {
        $this->fileToken = $fileToken;

        return $this;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function setFile(string $file): MediaFile
    {
        $this->file = $file;

        return $this;
    }
}