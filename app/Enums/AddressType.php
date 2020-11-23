<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static PRIVATE()
 * @method static static COMPANY()
 */
final class AddressType extends Enum implements LocalizedEnum
{
    const PRIVATE = 'Private';
    const COMPANY = 'Company';
}
