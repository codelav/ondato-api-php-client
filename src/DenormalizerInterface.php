<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient;

interface DenormalizerInterface
{
    public function mapFromEntity($entity): array;
}