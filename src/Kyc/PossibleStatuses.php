<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc;

final class PossibleStatuses
{
    const STATUS_STARTED = 0;
    const STATUS_AUTO_FINISH = 1;
    const STATUS_MANUAL_FINISH = 2;
    const STATUS_FAILED = 3;
    const STATUS_EXPIRED = 4;
    const STATUS_REJECTED = 5;
}