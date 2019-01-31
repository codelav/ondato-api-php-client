<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Mapper;

use Velser\OndatoApiClient\NormalizerInterface;
use Velser\OndatoApiClient\Verifid\Entity\CompareIdentificationResponse;

class CompareIdentificationMapper implements NormalizerInterface
{
    public function mapToEntity(array $data)
    {
        $compareIdentificationResponse = (new CompareIdentificationResponse())
            ->setFinalStatus($data['finalStatus']);

        if (isset($data['failedRules'])) {
            $compareIdentificationResponse->setFailedRules($data['failedRules']);
        }

        return $compareIdentificationResponse;
    }
}