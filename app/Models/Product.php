<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'qty',
        'price',
        'user_id',
    ];

    /**
     * Relasi ke User (Satu produk dimiliki oleh satu user)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke Category (Satu produk bisa punya banyak kategori berdasarkan ERD)
     */
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}