<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Get All Categories (GET)
     */
    public function index()
    {
        return response()->json([
            'message' => 'Daftar kategori berhasil diambil',
            'data' => Category::all()
        ], 200);
    }

    /**
     * Store New Category (POST)
     * @authenticated
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        
        $category = Category::create($request->all());
        return response()->json([
            'message' => 'Kategori berhasil ditambahkan',
            'data' => $category
        ], 201);
    }

    /**
     * Get Single Category (GET)
     */
    public function show($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }
        return response()->json(['data' => $category], 200);
    }

    /**
     * Update Category (PUT)
     * @authenticated
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        $request->validate(['name' => 'required|string|max:255']);
        $category->update($request->all());

        return response()->json([
            'message' => 'Kategori berhasil diubah',
            'data' => $category
        ], 200);
    }

    /**
     * Delete Category (DELETE)
     * 
     * @authenticated
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        $category->delete();
        return response()->json(['message' => 'Kategori berhasil dihapus'], 200);
    }
}