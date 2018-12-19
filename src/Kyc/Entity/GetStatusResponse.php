<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;

class GetStatusResponse
{
    private $statusId;
    private $identificationStatusText;
    private $rejectReasonId;
    private $rejectReasonText;

    public function getStatusId(): ?int
    {
        return $this->statusId;
    }

    public function setStatusId(int $statusId): GetStatusResponse
    {
        $this->statusId = $statusId;

        return $this;
    }

    public function getIdentificationStatusText(): string
    {
        return $this->identificationStatusText;
    }

    public function setIdentificationStatusText(string $identificationStatusText): GetStatusResponse
    {
        $this->identificationStatusText = $identificationStatusText;

        return $this;
    }

    public function getRejectReasonId(): ?int
    {
        return $this->rejectReasonId;
    }

    public function setRejectReasonId(string $rejectReasonId): GetStatusResponse
    {
        $this->rejectReasonId = $rejectReasonId;

        return $this;
    }

    public function getRejectReasonText(): ?string
    {
        return $this->rejectReasonText;
    }

    public function setRejectReasonText(string $rejectReasonText): GetStatusResponse
    {
        $this->rejectReasonText = $rejectReasonText;

        return $this;
    }
}