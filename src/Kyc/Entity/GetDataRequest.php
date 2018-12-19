<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class GetDataRequest
{
    private $apiKey;
    private $token;

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function setApiKey(string $apiKey): GetDataRequest
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): GetDataRequest
    {
        $this->token = $token;

        return $this;
    }
}