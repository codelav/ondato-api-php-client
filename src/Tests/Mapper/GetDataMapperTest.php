<?php

namespace Velser\OndatoApiClient\Tests\Mapper;

use PHPUnit\Framework\TestCase;
use Velser\OndatoApiClient\Kyc\Entity\GetDataResponse;
use Velser\OndatoApiClient\Kyc\Mapper\GetDataMapper;
use Velser\OndatoApiClient\Kyc\Mapper\ParsedDocumentDataMapper;
use Velser\OndatoApiClient\Kyc\Mapper\SessionDataMapper;

class GetDataMapperTest extends TestCase
{
    public function test_map_to_entity()
    {
        $data = json_decode('{
              "identificationData": {
                "status": "APPROVED"
              },
              "requestData": {
                "emailAddress": "testv2@ondato.com",
                "firstName": "Name",
                "middleName": "Middle",
                "lastName": "Surname",
                "personalIdentityCode": "12345678901",
                "phoneNumber": "+12345678901",
                "dateOfBirth": "1991-01-31T00:00:00"
              },
              "documentData": {
                "firstName": "Name",
                "middleName": "Middle",
                "lastName": "Surname",
                "personalIdentityCode": "12345678901",
                "dateOfBirth": "1991-01-31T00:00:00",
                "nationality": "LTU",
                "gender": "M",
                "address": "Some Address",
                "country": "LTU",
                "documentNumber": "12345678",
                "documentType": "ID_CARD",
                "dateOfIssue": "2019-01-31T00:00:00",
                "dateOfExpiration": "2029-01-31T00:00:00"
              },
              "customData": {
                "myCustomKey": "my-custom-data"
              }
            }',
            true);

        $mapper = new GetDataMapper(new SessionDataMapper(), new ParsedDocumentDataMapper());

        $result = $mapper->mapToEntity($data);
        
        $this->assertEquals((new GetDataResponse())->setStatus());
    }
}
