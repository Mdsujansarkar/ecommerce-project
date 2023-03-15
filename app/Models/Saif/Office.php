<?php

namespace App\Models\Saif;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Office extends Model
{
    use HasFactory;
    use SoftDeletes;
    const APPROVAL_PENDING = 1;
    const APPROVAL_APPROVED = 2;
    const APPROVAL_REJECT = 3;
    protected $casts = [
        'lat' => 'decimal:8',
        'lng' => 'decimal:8',
        'approval_status' => 'integer',
        'hidden' => 'bool',
        'price_per_day' => 'integer',
        'monthly_discount' => 'integer',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
    public function images():MorphMany
    {
        return $this->morphMany(Images::class, 'resource');
    }
}
