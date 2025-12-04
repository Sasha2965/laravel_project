<?php

namespace App\Enums\Payments;

enum PaymentStatusEnum: int
{
    case Active = 1;

    case Paid = 2;

    case Finished = 3;
}
