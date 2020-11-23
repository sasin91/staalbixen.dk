<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static PENDING()
 * @method static static PAID()
 * @method static static REJECTED()
 * @method static static REFUNDED()
 */
final class PaymentStatus extends Enum
{
    const PENDING = 'Pending';
    const PAID = 'Paid';
    const REJECTED = 'Rejected';
    const REFUNDED = 'Refunded';
}
