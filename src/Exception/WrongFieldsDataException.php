<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Exception;

use Exception;

class WrongFieldsDataException extends Exception
{
    private $fieldErrors = [];

    public function __construct(array $fieldErrors = [])
    {
        parent::__construct('Wrong fields data');

        $this->fieldErrors = $fieldErrors;
    }

    public function getFieldErrors(): array
    {
        return $this->fieldErrors;
    }
}