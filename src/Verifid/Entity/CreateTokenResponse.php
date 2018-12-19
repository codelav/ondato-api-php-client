<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Entity;

class CreateTokenResponse
{
    private $accessToken;
    private $tokenType;
    private $expiresIn;

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): CreateTokenResponse
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    public function setTokenType(string $tokenType): CreateTokenResponse
    {
        $this->tokenType = $tokenType;

        return $this;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function setExpiresIn(int $expiresIn): CreateTokenResponse
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }
}