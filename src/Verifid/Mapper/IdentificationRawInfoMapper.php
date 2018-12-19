<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Verifid\Mapper;

use Velser\OndatoApiClient\NormalizerInterface;
use Velser\OndatoApiClient\Verifid\Entity\IdentificationRawInfo;

class IdentificationRawInfoMapper implements NormalizerInterface
{
    private $mediaFileMapper;

    public function __construct(MediaFileMapper $mediaFileMapper)
    {
        $this->mediaFileMapper = $mediaFileMapper;
    }

    public function mapToEntity(array $data): IdentificationRawInfo
    {
        $identificationRawInfo = (new IdentificationRawInfo())
            ->setCreated($data['created'])
            ->setToken($data['token'])
            ->setCompareScore($data['compareScore'])
        ;

        if (isset($data['email'])) {
            $identificationRawInfo->setEmail($data['email']);
        }

        if (isset($data['phone'])) {
            $identificationRawInfo->setPhone($data['phone']);
        }

        if (isset($data['ip'])) {
            $identificationRawInfo->setIp($data['ip']);
        }

        if (isset($data['mediaFiles'])) {
            foreach ($data['mediaFiles'] as $mediaFileData) {
                $identificationRawInfo->addMediaFile($this->mediaFileMapper->mapToEntity($mediaFileData));
            }
        }

        return $identificationRawInfo;
    }
}