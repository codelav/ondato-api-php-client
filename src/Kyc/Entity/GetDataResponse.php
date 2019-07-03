<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class GetDataResponse
{
    private $status;
    private $sessionData;
    private $parsedDocumentData;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): GetDataResponse
    {
        $this->status = $status;

        return $this;
    }

    public function getSessionData(): ?SessionData
    {
        return $this->sessionData;
    }

    public function setSessionData(SessionData $sessionData): GetDataResponse
    {
        $this->sessionData = $sessionData;

        return $this;
    }

    public function getParsedDocumentData(): ?ParsedDocumentData
    {
        return $this->parsedDocumentData;
    }

    public function setParsedDocumentData(ParsedDocumentData $parsedDocumentData): GetDataResponse
    {
        $this->parsedDocumentData = $parsedDocumentData;

        return $this;
    }
}
