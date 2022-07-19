<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use LogicException;
use Velser\OndatoApiClient\Exception\WrongFieldsDataException;
use Velser\OndatoApiClient\Kyc\Entity\GetDataRequest;
use Velser\OndatoApiClient\Kyc\Entity\GetStatusRequest;
use Velser\OndatoApiClient\Kyc\Entity\GetStatusResponse;
use Velser\OndatoApiClient\Kyc\Entity\StartSessionRequest;
use Velser\OndatoApiClient\Kyc\Entity\StartSessionResponse;
use Velser\OndatoApiClient\Kyc\Mapper\FlowDataMapper;
use Velser\OndatoApiClient\Kyc\Mapper\GetDataMapper;
use Velser\OndatoApiClient\Kyc\Mapper\GetStatusMapper;
use Velser\OndatoApiClient\Kyc\Mapper\ParsedDocumentDataMapper;
use Velser\OndatoApiClient\Kyc\Mapper\SessionDataMapper;
use Velser\OndatoApiClient\Kyc\Mapper\StartSessionMapper;

class KycApiClient
{
    private $client;
    private $apiKey;

    public function __construct(ClientInterface $client, string $apiKey)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    public function startSession(StartSessionRequest $startSessionRequest): StartSessionResponse
    {
        if ($startSessionRequest->getSessionData() === null) {
            throw new LogicException('Start session request must have session data');
        }

        $startSessionMapper = new StartSessionMapper(new SessionDataMapper(), new FlowDataMapper());

        try {
            $response = $this->client->request(
                'POST',
                '/identifications/start',
                [
                    'json' => $startSessionMapper->mapFromEntity($startSessionRequest),
                    'headers' => ['x-api-key' => $this->apiKey]
                ]
            );

            return $startSessionMapper->mapToEntity(json_decode($response->getBody()->getContents(), true));
        } catch (ClientException $exception) {
            throw $exception;
        }
    }

    public function getData(string $identificationId, bool $raw = false)
    {
        $getDataMapper = new GetDataMapper(new SessionDataMapper(), new ParsedDocumentDataMapper());

        try {
            $response = $this->client->request(
                'GET',
                '/identifications/' . $identificationId . '/data',
                [
                    'headers' => ['x-api-key' => $this->apiKey]
                ]
            );

            $responseData = json_decode($response->getBody()->getContents(), true);

            return $raw ? $responseData : $getDataMapper->mapToEntity($responseData);
        } catch (ClientException $exception) {
            if ($exception->getResponse()->getStatusCode() === 400) {
                $data = json_decode($exception->getResponse()->getBody()->getContents(), true);
                $rawData = ['identificationData' => ['status' => $data['status'], 'failReason' => $data['message']]];

                return $raw ? $rawData : $getDataMapper->mapToEntity($rawData);
            }

            throw $exception;
        }
    }
}
