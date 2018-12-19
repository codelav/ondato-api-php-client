<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Mapper;

use Velser\OndatoApiClient\Kyc\Entity\GetDataRequest;
use Velser\OndatoApiClient\Kyc\Entity\GetDataResponse;
use Velser\OndatoApiClient\DenormalizerInterface;
use Velser\OndatoApiClient\NormalizerInterface;

class GetDataMapper implements NormalizerInterface, DenormalizerInterface
{
    private $sessionDataMapper;
    private $parsedDocumentDataMapper;

    public function __construct(
        SessionDataMapper $sessionDataMapper,
        ParsedDocumentDataMapper $parsedDocumentDataMapper
    ) {
        $this->sessionDataMapper = $sessionDataMapper;
        $this->parsedDocumentDataMapper = $parsedDocumentDataMapper;
    }

    public function mapToEntity(array $data): GetDataResponse
    {
        $getDataResponse = (new GetDataResponse())
            ->setStatus($data['status'])
            ->setIsCrossChecked($data['isCrossChecked'])
        ;

        if (isset($data['isFoundInSanctionList'])) {
            $getDataResponse->setIsFoundInSanctionList($data['isFoundInSanctionList']);
        }

        if (isset($data['data'])) {
            $getDataResponse->setSessionData($this->sessionDataMapper->mapToEntity($data['data']));
        }

        if (isset($data['documentData'])) {
            $getDataResponse->setParsedDocumentData(
                $this->parsedDocumentDataMapper->mapToEntity($data['documentData'])
            );
        }

        return $getDataResponse;
    }

    /**
     * @param GetDataRequest $entity
     *
     * @return array
     */
    public function mapFromEntity($entity): array
    {
        return [
            'apikey' => $entity->getApiKey(),
            'token' => $entity->getToken(),
        ];
    }
}