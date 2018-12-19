<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Mapper;

use Velser\OndatoApiClient\Kyc\Entity\SessionData;
use Velser\OndatoApiClient\DenormalizerInterface;
use Velser\OndatoApiClient\NormalizerInterface;

class SessionDataMapper implements NormalizerInterface, DenormalizerInterface
{
    public function mapToEntity(array $data): SessionData
    {
        $sessionData = new SessionData();

        if (isset($data['email'])) {
            $sessionData->setEmail($data['email']);
        }

        if (isset($data['birthDate'])) {
            $sessionData->setBirthDate($data['birthDate']);
        }

        if (isset($data['firstName'])) {
            $sessionData->setFirstName($data['firstName']);
        }

        if (isset($data['lastName'])) {
            $sessionData->setLastName($data['lastName']);
        }

        if (isset($data['personCode'])) {
            $sessionData->setPersonCode($data['personCode']);
        }

        if (isset($data['phoneNumber'])) {
            $sessionData->setPhoneNumber($data['phoneNumber']);
        }

        if (isset($data['language'])) {
            $sessionData->setLanguage($data['language']);
        }

        if (isset($data['nationality'])) {
            $sessionData->setNationality($data['nationality']);
        }

        if (isset($data['address'])) {
            $sessionData->setAddress($data['address']);
        }

        if (isset($data['city'])) {
            $sessionData->setCity($data['city']);
        }

        if (isset($data['country'])) {
            $sessionData->setCountry($data['country']);
        }

        if (isset($data['refId'])) {
            $sessionData->setRefId($data['refId']);
        }

        return $sessionData;
    }

    /**
     * @param SessionData $entity
     *
     * @return array
     */
    public function mapFromEntity($entity): array
    {
        return array_filter([
            'email' => $entity->getEmail(),
            'birthDate' => $entity->getBirthDate(),
            'firstName' => $entity->getFirstName(),
            'lastName' => $entity->getLastName(),
            'personCode' => $entity->getPersonCode(),
            'phoneNumber' => $entity->getPhoneNumber(),
            'language' => $entity->getLanguage(),
            'nationality' => $entity->getNationality(),
            'address' => $entity->getAddress(),
            'city' => $entity->getCity(),
            'country' => $entity->getCountry(),
            'refId' => $entity->getRefId(),
        ]);
    }
}