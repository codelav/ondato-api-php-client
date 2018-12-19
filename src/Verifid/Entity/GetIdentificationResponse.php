<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Entity;

class GetIdentificationResponse
{
    private $identificationRawInfo;
    private $isError;
    private $errorDescription;

    public function getIdentificationRawInfo(): IdentificationRawInfo
    {
        return $this->identificationRawInfo;
    }

    public function setIdentificationRawInfo(IdentificationRawInfo $identificationRawInfo): GetIdentificationResponse
    {
        $this->identificationRawInfo = $identificationRawInfo;

        return $this;
    }

    public function isError(): bool
    {
        return $this->isError;
    }

    public function setIsError(bool $isError): GetIdentificationResponse
    {
        $this->isError = $isError;

        return $this;
    }

    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }

    public function setErrorDescription(string $errorDescription): GetIdentificationResponse
    {
        $this->errorDescription = $errorDescription;

        return $this;
    }
}