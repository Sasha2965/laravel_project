<?php

namespace App\Enums;

enum OrderStatusEnum: int
{
    case New = 1;

    case Pending = 2;

    case Finished = 3;

    case Cancelled = 4;
}
