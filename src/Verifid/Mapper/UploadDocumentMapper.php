<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Mapper;

use Velser\OndatoApiClient\DenormalizerInterface;
use Velser\OndatoApiClient\NormalizerInterface;
use Velser\OndatoApiClient\Verifid\Entity\UploadDocumentRequest;
use Velser\OndatoApiClient\Verifid\Entity\UploadDocumentResponse;

class UploadDocumentMapper implements DenormalizerInterface, NormalizerInterface
{
    /**
     * @param UploadDocumentRequest $entity
     *
     * @return array
     */
    public function mapFromEntity($entity): array
    {
        return [
            [
                'name' => 'DocumentType',
                'contents' => $entity->getDocumentType(),
            ],
            [
                'name' => 'Token',
                'contents' => $entity->getToken(),
            ],
            [
                'name' => 'DocumentFile',
                'contents' => fopen($entity->getDocumentFile(), 'r'),
            ],
            [
                'name' => 'PageType',
                'contents' => $entity->getPageType(),
            ],
        ];
    }

    public function mapToEntity(array $data): UploadDocumentResponse
    {
        $uploadDocumentResponse = (new UploadDocumentResponse())
            ->setFaceScanResult($data['faceScanResult']);

        if (isset($data['mrz'])) {
            $uploadDocumentResponse->setMrz($data['mrz']);
        }

        return $uploadDocumentResponse;
    }
}