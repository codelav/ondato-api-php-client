<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Mapper;

use Velser\OndatoApiClient\NormalizerInterface;
use Velser\OndatoApiClient\Verifid\Entity\CreateTokenResponse;

class CreateTokenMapper implements NormalizerInterface
{
    public function mapToEntity(array $data): CreateTokenResponse
    {
        return (new CreateTokenResponse())
            ->setAccessToken($data['access_token'])
            ->setTokenType($data['token_type'])
            ->setExpiresIn($data['expires_in'])
            ;
    }
}