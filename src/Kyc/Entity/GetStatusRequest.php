<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class GetStatusRequest
{
    private $apiKey;
    private $email;

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function setApiKey(string $apiKey): GetStatusRequest
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): GetStatusRequest
    {
        $this->email = $email;

        return $this;
    }
}