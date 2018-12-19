<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Mapper;

use Velser\OndatoApiClient\NormalizerInterface;
use Velser\OndatoApiClient\Verifid\Entity\CompareIdentificationResponse;

class CompareIdentificationMapper implements NormalizerInterface
{
    public function mapToEntity(array $data)
    {
        return (new CompareIdentificationResponse())
            ->setFinalStatus($data['finalStatus'])
            ->setFailedRules($data['failedRules'])
            ;
    }
}