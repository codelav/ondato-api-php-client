<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use Velser\OndatoApiClient\Exception\NotImplementedException;
use Velser\OndatoApiClient\Verifid\Entity\CompareIdentificationResponse;
use Velser\OndatoApiClient\Verifid\Entity\CreateTokenResponse;
use Velser\OndatoApiClient\Verifid\Entity\GetIdentificationResponse;
use Velser\OndatoApiClient\Verifid\Entity\StartIdentificationResponse;
use Velser\OndatoApiClient\Verifid\Entity\UploadDocumentRequest;
use Velser\OndatoApiClient\Verifid\Entity\UploadDocumentResponse;
use Velser\OndatoApiClient\Verifid\Entity\UploadFaceRequest;
use Velser\OndatoApiClient\Verifid\Entity\UploadFaceResponse;
use Velser\OndatoApiClient\Verifid\Mapper\CompareIdentificationMapper;
use Velser\OndatoApiClient\Verifid\Mapper\CreateTokenMapper;
use Velser\OndatoApiClient\Verifid\Mapper\GetIdentificationMapper;
use Velser\OndatoApiClient\Verifid\Mapper\IdentificationRawInfoMapper;
use Velser\OndatoApiClient\Verifid\Mapper\MediaFileMapper;
use Velser\OndatoApiClient\Verifid\Mapper\StartIdentificationMapper;
use Velser\OndatoApiClient\Verifid\Mapper\UploadDocumentMapper;
use Velser\OndatoApiClient\Verifid\Mapper\UploadFaceMapper;

class VerifidApiClient
{
    private $client;
    private $username;
    private $password;
    private $accessToken;

    public function __construct(ClientInterface $client, string $username, string $password)
    {
        $this->client = $client;
        $this->username = $username;
        $this->password = $password;
    }
    
    public function createToken(): CreateTokenResponse
    {
        try {
            $response = $this->client->request(
                'POST',
                '/verifid/token',
                [
                    'form_params' => [
                        'username' => $this->username,
                        'password' => $this->password,
                        'grant_type' => 'password',
                    ],
                ]
            );

            return (new CreateTokenMapper())
                ->mapToEntity(json_decode($response->getBody()->getContents(), true));
        } catch (ClientException $exception) {
            throw new NotImplementedException();
        }
    }

    public function startIdentification(): StartIdentificationResponse
    {
        if ($this->accessToken === null) {
            $this->accessToken = $this->createToken()->getAccessToken();
        }

        try {
            $response = $this->client->request(
                'POST',
                '/verifid/api/identifications/start',
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->accessToken,
                    ],
                ]
            );

            return (new StartIdentificationMapper())
                ->mapToEntity(json_decode($response->getBody()->getContents(), true));
        } catch (ClientException $exception) {
            throw new NotImplementedException();
        }
    }

    public function uploadFace(UploadFaceRequest $uploadFaceRequest): UploadFaceResponse
    {
        if ($this->accessToken === null) {
            $this->accessToken = $this->createToken()->getAccessToken();
        }

        $uploadFaceMapper = new UploadFaceMapper();

        try {
            $response = $this->client->request(
                'POST',
                '/verifid/api/media/face',
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->accessToken,
                    ],
                    'multipart' => $uploadFaceMapper->mapFromEntity($uploadFaceRequest),
                ]
            );

            return $uploadFaceMapper->mapToEntity(json_decode($response->getBody()->getContents(), true));
        } catch (ClientException $exception) {
            throw new NotImplementedException();
        }
    }

    public function uploadDocument(UploadDocumentRequest $uploadDocumentRequest): UploadDocumentResponse
    {
        if ($this->accessToken === null) {
            $this->accessToken = $this->createToken()->getAccessToken();
        }

        $uploadDocumentMapper = new UploadDocumentMapper();

        try {
            $response = $this->client->request(
                'POST',
                '/verifid/api/media/document',
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->accessToken,
                    ],
                    'multipart' => $uploadDocumentMapper->mapFromEntity($uploadDocumentRequest),
                ]
            );

            return $uploadDocumentMapper->mapToEntity(json_decode($response->getBody()->getContents(), true));
        } catch (ClientException $exception) {
            throw new NotImplementedException();
        }
    }

    public function compareIdentification(string $token): CompareIdentificationResponse
    {
        if ($this->accessToken === null) {
            $this->accessToken = $this->createToken()->getAccessToken();
        }

        try {
            $response = $this->client->request(
                'POST',
                '/verifid/api/identifications/compare',
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->accessToken,
                    ],
                    'json' => [
                        'token' => $token,
                    ],
                ]
            );

            return (new CompareIdentificationMapper())
                ->mapToEntity(json_decode($response->getBody()->getContents(), true));
        } catch (ClientException $exception) {
            throw new NotImplementedException();
        }
    }

    public function getIdentification(string $token): GetIdentificationResponse
    {
        if ($this->accessToken === null) {
            $this->accessToken = $this->createToken()->getAccessToken();
        }

        $getIdentificationMapper = new GetIdentificationMapper(new IdentificationRawInfoMapper(new MediaFileMapper()));

        try {
            $response = $this->client->request(
                'GET',
                '/verifid/api/identifications/get',
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->accessToken,
                    ],
                    'query' => [
                        'token' => $token,
                    ],
                ]
            );

            return $getIdentificationMapper->mapToEntity(json_decode($response->getBody()->getContents(), true));
        } catch (ClientException $exception) {
            throw new NotImplementedException();
        }
    }
}
