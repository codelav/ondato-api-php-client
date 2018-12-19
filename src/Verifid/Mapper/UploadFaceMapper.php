<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Mapper;

use Velser\OndatoApiClient\DenormalizerInterface;
use Velser\OndatoApiClient\NormalizerInterface;
use Velser\OndatoApiClient\Verifid\Entity\UploadFaceRequest;
use Velser\OndatoApiClient\Verifid\Entity\UploadFaceResponse;

class UploadFaceMapper implements DenormalizerInterface, NormalizerInterface
{
    /**
     * @param UploadFaceRequest $entity
     *
     * @return array
     */
    public function mapFromEntity($entity): array
    {
        return [
            [
                'name' => 'FaceMediaType',
                'contents' => $entity->getFaceMediaType(),
            ],
            [
                'name' => 'Token',
                'contents' => $entity->getToken(),
            ],
            [
                'name' => 'File',
                'contents' => fopen($entity->getFile(), 'r'),
            ],
        ];
    }

    public function mapToEntity(array $data): UploadFaceResponse
    {
        return (new UploadFaceResponse())->setFaceScanResult($data['faceScanResult']);
    }
}