<?php

namespace App\Models\Saif;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Office extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $casts = [
        'lat' => 'decimal',
        'lng' => 'decimal',
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
}
