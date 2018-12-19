<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Mapper;

use Velser\OndatoApiClient\Kyc\Entity\GetStatusRequest;
use Velser\OndatoApiClient\Kyc\Entity\GetStatusResponse;
use Velser\OndatoApiClient\DenormalizerInterface;
use Velser\OndatoApiClient\NormalizerInterface;

class GetStatusMapper implements NormalizerInterface, DenormalizerInterface
{
    public function mapToEntity(array $data): GetStatusResponse
    {
        $getStatusResponse = new GetStatusResponse();

        if (isset($data['statusId'])) {
            $getStatusResponse->setStatusId($data['statusId']);
        }

        if (isset($data['identificationStatusText'])) {
            $getStatusResponse->setIdentificationStatusText($data['identificationStatusText']);
        }

        if (isset($data['rejectReasonId'])) {
            $getStatusResponse->setRejectReasonId($data['rejectReasonId']);
        }

        if (isset($data['rejectReasonText'])) {
            $getStatusResponse->setRejectReasonText($data['rejectReasonText']);
        }

        return $getStatusResponse;
    }

    /**
     * @param GetStatusRequest $entity
     *
     * @return array
     */
    public function mapFromEntity($entity): array
    {
        return [
            'apikey' => $entity->getApiKey(),
            'email' => $entity->getEmail(),
        ];
    }
}