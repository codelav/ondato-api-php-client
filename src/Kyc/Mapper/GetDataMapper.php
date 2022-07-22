<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Mapper;

use Velser\OndatoApiClient\Kyc\Entity\GetDataResponse;
use Velser\OndatoApiClient\NormalizerInterface;

class GetDataMapper implements NormalizerInterface
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
            ->setStatus($data['identificationData']['status'])
        ;

        if (isset($data['identificationData']['failReason'])) {
            $getDataResponse->setFailReason($data['identificationData']['failReason']);
        }

        if (isset($data['requestData'])) {
            $getDataResponse->setSessionData($this->sessionDataMapper->mapToEntity($data['requestData']));
        }

        if (isset($data['documentData'])) {
            $getDataResponse->setParsedDocumentData(
                $this->parsedDocumentDataMapper->mapToEntity($data['documentData'])
            );
        }

        return $getDataResponse;
    }
}
