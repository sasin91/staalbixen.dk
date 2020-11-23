<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class DeliveryStatus extends Enum
{
    const INCOMPLETE = 'Incomplete';

    const PENDING = 'Pending';
    const IN_TRANSIT = 'In Transit';
    const DELIVERED = 'Delivered';
    const RETURNED = 'Returned';
}
