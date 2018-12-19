<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Entity;

class UploadDocumentRequest
{
    const DOCUMENT_TYPE_INDENTITY_CARD = 'IdentityCard';
    const DOCUMENT_TYPE_PASSPORT = 'Passport';
    const DOCUMENT_TYPE_RESIDENCE_PERMIRT = 'ResidencePermit';
    const DOCUMENT_TYPE_DRIVER_LICENCE = 'DriverLicence';
    const DOCUMENT_TYPE_LOCAL_PASSPORT = 'LocalPassport';
    const DOCUMENT_TYPE_SOCIAL_ID = 'SocialId';
    const DOCUMENT_TYPE_OTHER = 'Other';

    const PAGE_TYPE_FRONT = 'Front';
    const PAGE_TYPE_BACK = 'Back';
    const PAGE_TYPE_WITH_MRZ = 'WithMrz';
    const PAGE_TYPE_WITHOUT_MRZ = 'WithoutMrz';

    private $token;
    private $documentFile;
    private $documentType;
    private $pageType;

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): UploadDocumentRequest
    {
        $this->token = $token;

        return $this;
    }

    public function getDocumentFile(): string
    {
        return $this->documentFile;
    }

    public function setDocumentFile(string $documentFile): UploadDocumentRequest
    {
        $this->documentFile = $documentFile;

        return $this;
    }

    public function getDocumentType(): string
    {
        return $this->documentType;
    }

    public function setDocumentType(string $documentType): UploadDocumentRequest
    {
        $this->documentType = $documentType;

        return $this;
    }

    public function getPageType(): string
    {
        return $this->pageType;
    }

    public function setPageType(string $pageType): UploadDocumentRequest
    {
        $this->pageType = $pageType;

        return $this;
    }
}