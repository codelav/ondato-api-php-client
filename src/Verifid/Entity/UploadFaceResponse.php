<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Entity;

class UploadFaceResponse
{
    const RESULT_FACE_FOUND = 'FaceFound';
    const RESULT_FACE_NOT_FOUND = 'FaceNotFound';

    private $faceScanResult;

    public function getFaceScanResult(): string
    {
        return $this->faceScanResult;
    }

    public function setFaceScanResult(string $faceScanResult): UploadFaceResponse
    {
        $this->faceScanResult = $faceScanResult;

        return $this;
    }
}