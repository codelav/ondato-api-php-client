<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Mapper;

use Velser\OndatoApiClient\NormalizerInterface;
use Velser\OndatoApiClient\Verifid\Entity\GetIdentificationResponse;

class GetIdentificationMapper implements NormalizerInterface
{
    private $identificationRawInfoMapper;

    public function __construct(IdentificationRawInfoMapper $identificationRawInfoMapper)
    {
        $this->identificationRawInfoMapper = $identificationRawInfoMapper;
    }

    public function mapToEntity(array $data): GetIdentificationResponse
    {
        $getIdentificationResponse = (new GetIdentificationResponse())
            ->setIsError($data['isError'])
            ->setIdentificationRawInfo(
                $this->identificationRawInfoMapper->mapToEntity($data['identificationRawInfo'])
            );

        if (isset($data['errorDescription']) && $data['errorDescription'] !== null) {
            $getIdentificationResponse->setErrorDescription($data['errorDescription']);
        }

        return $getIdentificationResponse;
    }
}