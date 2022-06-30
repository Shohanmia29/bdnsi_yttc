<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Pending()
 * @method static static Requested()
 * @method static static Approved()
 */
final class StudentStatus extends Enum
{
    const Pending = 0;
    const Requested = 1;
    const Approved = 2;
}
