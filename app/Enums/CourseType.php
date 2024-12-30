<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Regular()
 * @method static static Diploma()
 * @method static static Shor_Course()
 */
final class CourseType extends Enum
{
    const Regular =   0;
    const Shor_Course =   1;
    const Diploma =   2;

}
