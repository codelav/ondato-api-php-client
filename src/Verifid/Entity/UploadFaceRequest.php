<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Entity;

class UploadFaceRequest
{
    const MEDIA_TYPE_PHOTO = 'Photo';
    const MEDIA_TYPE_VIDEO = 'Video';

    private $faceMediaType;
    private $token;
    private $file;

    public function getFaceMediaType(): string
    {
        return $this->faceMediaType;
    }

    public function setFaceMediaType(string $faceMediaType): UploadFaceRequest
    {
        $this->faceMediaType = $faceMediaType;

        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): UploadFaceRequest
    {
        $this->token = $token;

        return $this;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function setFile(string $file): UploadFaceRequest
    {
        $this->file = $file;

        return $this;
    }
}