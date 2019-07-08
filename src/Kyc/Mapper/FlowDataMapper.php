<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Mapper;

use Velser\OndatoApiClient\DenormalizerInterface;
use Velser\OndatoApiClient\Kyc\Entity\FlowData;
use Velser\OndatoApiClient\Kyc\Entity\SessionData;
use Velser\OndatoApiClient\NormalizerInterface;

class FlowDataMapper implements NormalizerInterface, DenormalizerInterface
{
    public function mapToEntity(array $data): FlowData
    {
        return (new FlowData())
            ->setLanguage($data['language'])
            ->setRedirectUrl($data['redirectUrl'])
            ->setFormType($data['formType'])
            ;
    }

    /**
     * @param FlowData $entity
     * @return array
     */
    public function mapFromEntity($entity): array
    {
        return array_filter([
            'language' => $entity->getLanguage(),
            'redirectUrl' => $entity->getRedirectUrl(),
            'formType' => $entity->getFormType(),
        ]);
    }
}
