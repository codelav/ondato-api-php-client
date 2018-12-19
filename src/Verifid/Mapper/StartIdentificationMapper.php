<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Mapper;

use Velser\OndatoApiClient\NormalizerInterface;
use Velser\OndatoApiClient\Verifid\Entity\StartIdentificationResponse;

class StartIdentificationMapper implements NormalizerInterface
{
    public function mapToEntity(array $data): StartIdentificationResponse
    {
        return (new StartIdentificationResponse())->setToken($data['token']);
    }
}