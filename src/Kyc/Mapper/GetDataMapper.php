<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Mapper;

use Velser\OndatoApiClient\Kyc\Entity\GetDataRequest;
use Velser\OndatoApiClient\Kyc\Entity\GetDataResponse;
use Velser\OndatoApiClient\DenormalizerInterface;
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
        print_r($data);
        $getDataResponse = (new GetDataResponse())
            ->setStatus($data['identificationData']['status'])
        ;

        if (isset($data['requestData'])) {
            $getDataResponse->setSessionData($this->sessionDataMapper->mapToEntity($data['data']));
        }

        if (isset($data['documentData'])) {
            $getDataResponse->setParsedDocumentData(
                $this->parsedDocumentDataMapper->mapToEntity($data['documentData'])
            );
        }

        return $getDataResponse;
    }
}
