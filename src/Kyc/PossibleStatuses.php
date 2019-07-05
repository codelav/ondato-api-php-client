<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc;

final class PossibleStatuses
{
    const STATUS_BAD_REQUEST = 'IDENTIFICATION_NOT_FOUND';
    const STATUS_IDENTIFICATION_NOT_FOUND = 'IDENTIFICATION_NOT_FOUND';
    const STATUS_SESSION_NOT_CREATED = 'SESSION_NOT_CREATED';

    const STATUS_APPROVED = 'APPROVED';
    const STATUS_SUCCESSFUL = 'SUCCESSFUL';
    const STATUS_PENDING = 'PENDING';
    
    const STATUS_FAILED = 'FAILED';
}
