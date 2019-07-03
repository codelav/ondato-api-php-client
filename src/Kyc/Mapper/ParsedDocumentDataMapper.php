<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\Mapper;

use Velser\OndatoApiClient\DenormalizerInterface;
use Velser\OndatoApiClient\Kyc\Entity\ParsedDocumentData;
use Velser\OndatoApiClient\NormalizerInterface;

class ParsedDocumentDataMapper implements NormalizerInterface, DenormalizerInterface
{
    public function mapToEntity(array $data): ParsedDocumentData
    {
        $parsedDocumentData = new ParsedDocumentData();

        if (isset($data['personCode'])) {
            $parsedDocumentData->setPersonCode($data['personCode']);
        }

        if (isset($data['birthdate'])) {
            $parsedDocumentData->setBirthDate($data['birthdate']);
        }

        if (isset($data['firstName'])) {
            $parsedDocumentData->setFirstName($data['firstName']);
        }

        if (isset($data['middleName'])) {
            $parsedDocumentData->setMiddleName($data['middleName']);
        }

        if (isset($data['lastName'])) {
            $parsedDocumentData->setLastName($data['lastName']);
        }

        if (isset($data['documentNumber'])) {
            $parsedDocumentData->setDocumentNumber($data['documentNumber']);
        }

        if (isset($data['documentType'])) {
            $parsedDocumentData->setDocumentType($data['documentType']);
        }

        if (isset($data['expireDate'])) {
            $parsedDocumentData->setExpireDate($data['expireDate']);
        }

        if (isset($data['issueDate'])) {
            $parsedDocumentData->setIssueDate($data['issueDate']);
        }

        if (isset($data['country'])) {
            $parsedDocumentData->setCountry($data['country']);
        }

        if (isset($data['nationality'])) {
            $parsedDocumentData->setNationality($data['nationality']);
        }

        if (isset($data['gender'])) {
            $parsedDocumentData->setGender($data['gender']);
        }

        if (isset($data['address'])) {
            $parsedDocumentData->setAddress($data['address']);
        }

        return $parsedDocumentData;
    }

    /**
     * @param ParsedDocumentData $entity
     *
     * @return array
     */
    public function mapFromEntity($entity): array
    {
        $data = [];

        if ($entity->getPersonCode() !== null) {
            $data['personCode'] = $entity->getPersonCode();
        }

        if ($entity->getBirthDate() !== null) {
            $data['birthdate'] = $entity->getBirthDate();
        }

        if ($entity->getFirstName() !== null) {
            $data['firstName'] = $entity->getFirstName();
        }

        if ($entity->getLastName() !== null) {
            $data['lastName'] = $entity->getLastName();
        }

        if ($entity->getDocumentNumber() !== null) {
            $data['documentNumber'] = $entity->getDocumentNumber();
        }

        if ($entity->getDocumentType() !== null) {
            $data['documentType'] = $entity->getDocumentType();
        }

        if ($entity->getExpireDate() !== null) {
            $data['expireDate'] = $entity->getExpireDate();
        }

        if ($entity->getCountry() !== null) {
            $data['country'] = $entity->getCountry();
        }

        if ($entity->getNationality() !== null) {
            $data['nationality'] = $entity->getNationality();
        }

        return $data;
    }
}
