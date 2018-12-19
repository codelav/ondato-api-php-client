<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient;

interface NormalizerInterface
{
    public function mapToEntity(array $data);
}