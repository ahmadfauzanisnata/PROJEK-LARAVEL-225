<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;

class ProductPolicy
{
    /**
     * Tentukan apakah user bisa mengupdate produk.
     */
    public function update(User $user, Product $product): bool
    {
         if ($user->role === 'admin') {
            return true;
        }
        // Hanya pemilik produk yang bisa update
        return $user->id === $product->user_id;
    }

    /**
     * Tentukan apakah user bisa menghapus produk.
     */
    public function delete(User $user, Product $product): bool
    {
        // Admin bisa hapus semua, User biasa hanya miliknya sendiri
        if ($user->role === 'admin') {
            return true;
        }

        return $user->id === $product->user_id;
    }
}