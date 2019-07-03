<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class StartSessionRequest
{
    private $sessionData;
    private $flowData;

    public function getSessionData(): SessionData
    {
        return $this->sessionData;
    }

    public function setSessionData(SessionData $sessionData): StartSessionRequest
    {
        $this->sessionData = $sessionData;

        return $this;
    }

    public function getFlowData(): FlowData
    {
        return $this->flowData;
    }

    public function setFlowData(FlowData $flowData): StartSessionRequest
    {
        $this->flowData = $flowData;

        return $this;
    }
}
