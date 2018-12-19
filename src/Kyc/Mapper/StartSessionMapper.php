<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Mapper;

use Velser\OndatoApiClient\Kyc\Entity\StartSessionRequest;
use Velser\OndatoApiClient\Kyc\Entity\StartSessionResponse;
use Velser\OndatoApiClient\DenormalizerInterface;
use Velser\OndatoApiClient\NormalizerInterface;

class StartSessionMapper implements NormalizerInterface, DenormalizerInterface
{
    private $sessionDataMapper;

    public function __construct(SessionDataMapper $sessionDataMapper)
    {
        $this->sessionDataMapper = $sessionDataMapper;
    }

    public function mapToEntity(array $data): StartSessionResponse
    {
        return (new StartSessionResponse())->setToken($data['token']);
    }

    /**
     * @param StartSessionRequest $startSessionRequest
     *
     * @return array
     */
    public function mapFromEntity($startSessionRequest): array
    {
        return [
            'apikey' => $startSessionRequest->getApiKey(),
            'data' => $this->sessionDataMapper->mapFromEntity($startSessionRequest->getSessionData()),
            'isVideoCallRequest' => $startSessionRequest->isVideoCallRequest(),
        ];
    }
}