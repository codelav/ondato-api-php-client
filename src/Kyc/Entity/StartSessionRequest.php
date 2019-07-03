<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class StartSessionRequest
{
    private $sessionData;

    public function getSessionData(): SessionData
    {
        return $this->sessionData;
    }

    public function setSessionData(SessionData $sessionData): StartSessionRequest
    {
        $this->sessionData = $sessionData;

        return $this;
    }
}
