<?php

declare(strict_types = 1);

namespace NeueCommerce\Enums;

enum Gender: string
{
    case Genderless = 'genderless';

    case Male = 'male';

    case Female = 'female';
}
