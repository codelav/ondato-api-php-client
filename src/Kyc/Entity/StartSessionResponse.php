<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class StartSessionResponse
{
    private $token;

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): StartSessionResponse
    {
        $this->token = $token;

        return $this;
    }
}