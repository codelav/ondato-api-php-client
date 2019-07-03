<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class StartSessionResponse
{
    private $identificationId;
    private $redirectUrl;

    public function getIdentificationId(): string
    {
        return $this->identificationId;
    }

    public function setIdentificationId($identificationId): StartSessionResponse
    {
        $this->identificationId = $identificationId;

        return $this;
    }

    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

    public function setRedirectUrl(string $redirectUrl): StartSessionResponse
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }


}
