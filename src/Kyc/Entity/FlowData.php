<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Entity;


class FlowData
{
    private $language;
    private $redirectUrl;
    private $formType;

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): FlowData
    {
        $this->language = $language;

        return $this;
    }

    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    public function setRedirectUrl(string $redirectUrl): FlowData
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    public function getFormType(): ?string
    {
        return $this->formType;
    }

    public function setFormType(string $formType): FlowData
    {
        $this->formType = $formType;

        return $this;
    }


}
