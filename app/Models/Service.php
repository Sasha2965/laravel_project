<?php

namespace App\Models;

use App\Enums\ServiceTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';


    protected $fillable = [
        'title',
        'description',
        'price',
        'type'
    ];

    protected $casts = [
        'type' => ServiceTypeEnum::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orders(): HasMany {
        return $this->hasMany(Order::class);
    }
}
