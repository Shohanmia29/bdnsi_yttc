<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Regular()
 * @method static static Diploma()
 */
final class CourseType extends Enum
{
    const Regular =   0;
    const Diploma =   1;

}
