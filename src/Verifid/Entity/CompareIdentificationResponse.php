<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Entity;

class CompareIdentificationResponse
{
    const STATUS_FAILED = 'Failed';
    const AUTO_FINISH = 'AutoFinish';
    const MANUAL_FINISH = 'ManualFinish';

    private $finalStatus;
    private $failedRules = [];

    public function getFinalStatus(): string
    {
        return $this->finalStatus;
    }

    public function setFinalStatus(string $finalStatus): CompareIdentificationResponse
    {
        $this->finalStatus = $finalStatus;

        return $this;
    }

    public function getFailedRules(): array
    {
        return $this->failedRules;
    }

    public function setFailedRules(array $failedRules): CompareIdentificationResponse
    {
        $this->failedRules = $failedRules;

        return $this;
    }
}