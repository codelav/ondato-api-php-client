<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Mapper;

use Velser\OndatoApiClient\NormalizerInterface;
use Velser\OndatoApiClient\Verifid\Entity\MediaFile;

class MediaFileMapper implements NormalizerInterface
{
    public function mapToEntity(array $data): MediaFile
    {
        $mediaFile = (new MediaFile())
            ->setToken($data['token'])
            ->setId($data['id'])
            ->setCreated($data['created'])
            ->setFileType($data['fileType'])
            ->setFileExtension($data['fileExtension'])
            ->setFileToken($data['fileToken'])
            ->setFile($data['file'])
        ;

        if (isset($data['biometricStatus'])) {
            $mediaFile->setBiometricStatus($data['biometricStatus']);
        }

        if (isset($data['modelRecognitionStatus'])) {
            $mediaFile->setModelRecognitionStatus($data['modelRecognitionStatus']);
        }

        return $mediaFile;
    }
}