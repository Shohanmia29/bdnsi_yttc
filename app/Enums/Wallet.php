<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Deposit()
 * @method static static Cash()
 */
final class Wallet extends Enum
{
    const Deposit   = 0;
    const Cash      = 1;
}
