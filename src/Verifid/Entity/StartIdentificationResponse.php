<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Entity;

class StartIdentificationResponse
{
    private $token;

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): StartIdentificationResponse
    {
        $this->token = $token;

        return $this;
    }
}