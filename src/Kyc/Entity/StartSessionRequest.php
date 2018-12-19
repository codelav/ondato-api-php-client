<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class StartSessionRequest
{
    private $apiKey;
    private $sessionData;
    private $isVideoCallRequest = false;

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function setApiKey(string $apiKey): StartSessionRequest
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getSessionData(): SessionData
    {
        return $this->sessionData;
    }

    public function setSessionData(SessionData $sessionData): StartSessionRequest
    {
        $this->sessionData = $sessionData;

        return $this;
    }

    public function isVideoCallRequest(): bool
    {
        return $this->isVideoCallRequest;
    }

    public function setIsVideoCallRequest(bool $isVideoCallRequest): StartSessionRequest
    {
        $this->isVideoCallRequest = $isVideoCallRequest;

        return $this;
    }
}