<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Velser\OndatoApiClient\Exception\WrongFieldsDataException;
use Velser\OndatoApiClient\Kyc\Entity\SessionData;
use Velser\OndatoApiClient\Kyc\Entity\StartSessionRequest;
use Velser\OndatoApiClient\KycApiClient;
use PHPUnit\Framework\MockObject\MockObject;

class KycApiClientTest extends TestCase
{
    public function test_will_throw_exception_when_invalid_fields_sent()
    {
        self::expectException(WrongFieldsDataException::class);

        /** @var ClientInterface|MockObject $clientMock */
        $clientMock = self::createMock(Client::class);

        $kycApiClient = new KycApiClient($clientMock, 'apikey');

        $startSessionRequest = (new StartSessionRequest())
            ->setSessionData(
                (new SessionData())
                    ->setEmail('test')
            );

        /** @var Request|MockObject $requestMock */
        $requestMock = self::createMock(Request::class);

        $response = new Response(400, [], json_encode(['Email' => ['bad email']]));

        $clientMock
            ->expects(self::once())
            ->method('request')
            ->willThrowException(
                (new ClientException('Bad request', $requestMock, $response))
            );

        $kycApiClient->startSession($startSessionRequest);
    }
}