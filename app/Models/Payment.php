<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use App\Enums\Payments\PaymentMethodEnum;
use App\Enums\Payments\PaymentStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'order_id',
        'status',
        'method',
    ];

    protected $casts = [
        'status' => PaymentStatusEnum::class,
        'method' => PaymentMethodEnum::class,
    ];

    public function order(): BelongsTo {
        return $this->belongsTo(Order::class);
    }
}
