<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class GetDataResponse
{
    private $status;
    private $isCrossChecked;
    private $isFoundInSanctionList;
    private $sessionData;
    private $parsedDocumentData;

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): GetDataResponse
    {
        $this->status = $status;

        return $this;
    }

    public function getisCrossChecked(): bool
    {
        return $this->isCrossChecked;
    }

    public function setIsCrossChecked(bool $isCrossChecked): GetDataResponse
    {
        $this->isCrossChecked = $isCrossChecked;

        return $this;
    }

    public function getisFoundInSanctionList(): ?bool
    {
        return $this->isFoundInSanctionList;
    }

    public function setIsFoundInSanctionList(bool $isFoundInSanctionList): GetDataResponse
    {
        $this->isFoundInSanctionList = $isFoundInSanctionList;

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