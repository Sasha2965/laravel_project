<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use App\Enums\ServiceTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'service_id',
        'status',
        'total_price',
    ];

    protected $casts = [
      'status' => OrderStatusEnum::class,
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function service(): BelongsTo {
        return $this->belongsTo(Service::class);
    }

    public function payments(): HasOne {
        return $this->hasOne(Payment::class);
    }
}
