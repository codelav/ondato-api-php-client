<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Entity;

class UploadDocumentResponse
{
    const RESULT_FACE_FOUND = 'FaceFound';
    const RESULT_FACE_NOT_FOUND = 'FaceNotFound';
    const RESULT_MRZ_FOUND = 'MrzFound';
    const RESULT_MRZ_NOT_FOUND = 'MrzNotFound';

    private $faceScanResult;
    private $mrz;

    public function getFaceScanResult(): string
    {
        return $this->faceScanResult;
    }

    public function setFaceScanResult(string $faceScanResult): UploadDocumentResponse
    {
        $this->faceScanResult = $faceScanResult;

        return $this;
    }

    public function getMrz(): ?string
    {
        return $this->mrz;
    }

    public function setMrz(string $mrz): UploadDocumentResponse
    {
        $this->mrz = $mrz;

        return $this;
    }
}