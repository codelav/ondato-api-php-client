<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class GetDataRequest
{
    private $identificationId;

    public function getIdentificationId(): string
    {
        return $this->identificationId;
    }

    public function setIdentificationId(string $identificationId): GetDataRequest
    {
        $this->identificationId = $token;

        return $this;
    }
}
