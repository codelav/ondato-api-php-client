<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Mapper;

use Velser\OndatoApiClient\Kyc\Entity\StartSessionRequest;
use Velser\OndatoApiClient\Kyc\Entity\StartSessionResponse;
use Velser\OndatoApiClient\DenormalizerInterface;
use Velser\OndatoApiClient\NormalizerInterface;

class StartSessionMapper implements NormalizerInterface, DenormalizerInterface
{
    private $flowDataMapper;

    public function __construct(SessionDataMapper $sessionDataMapper, FlowDataMapper $flowDataMapper)
    {
        $this->sessionDataMapper = $sessionDataMapper;
        $this->flowDataMapper = $flowDataMapper;
    }

    public function mapToEntity(array $data): StartSessionResponse
    {
        return (new StartSessionResponse())
            ->setIdentificationId($data['identificationId'])
            ->setRedirectUrl($data['redirectUrl']);
    }

    /**
     * @param StartSessionRequest $startSessionRequest
     *
     * @return array
     */
    public function mapFromEntity($startSessionRequest): array
    {
        return [
            'requestData' => $this->sessionDataMapper->mapFromEntity($startSessionRequest->getSessionData()),
            'flowData' => $this->flowDataMapper->mapFromEntity($startSessionRequest->getFlowData()),
        ];
    }
}
