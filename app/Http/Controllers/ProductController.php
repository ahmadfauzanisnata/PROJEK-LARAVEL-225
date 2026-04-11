<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

// 1. Tambahkan baris import ini di bagian atas
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $users = User::orderBy('name')->get();
        return view('product.create', compact('users'));
    }

    /**
     * 2. Ganti 'Request' menjadi 'StoreProductRequest'
     */
    public function store(StoreProductRequest $request)
    {
        // Validasi dilakukan secara otomatis sebelum baris ini dieksekusi
        $validated = $request->validated();

        Product::create($validated);

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.view', compact('product'));
    }

    public function edit(Product $product)
    {
        $this->authorize('update', $product);

        $users = User::orderBy('name')->get();
        return view('product.edit', compact('product', 'users'));
    }

    /**
     * 3. Ganti 'Request' menjadi 'UpdateProductRequest'
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        
        $this->authorize('update', $product);

        // Validasi dilakukan secara otomatis menggunakan aturan di UpdateProductRequest
        $validated = $request->validated();

        $product->update($validated);

        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);

        $this->authorize('delete', $product);

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product berhasil dihapus');
    }
}