<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    // Mengambil semua kategori dan menghitung jumlah produk terkait
    $categories = Category::withCount('products')->get();
    
    return view('category.index', compact('categories'));
}

  /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|unique:categories,name',
    ]);

    Category::create([
        'name' => $request->name
    ]);

    return redirect()->route('category.index')->with('success', 'Category created successfully!');
}
    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    return view('category.create');
}
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

   /**
 * Menampilkan Form Edit
 */
public function edit(string $id)
{
    $category = Category::findOrFail($id);
    // Jika baris ini kosong, maka halaman akan tampil putih (blank)
    return view('category.edit', compact('category')); 
}

/**
 * Memproses Update Data
 */
public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required|unique:categories,name,' . $id,
    ]);

    $category = Category::findOrFail($id);
    $category->update([
        'name' => $request->name
    ]);

    return redirect()->route('category.index')->with('success', 'Category updated!');
}

/**
 * Menghapus Data
 */
public function destroy(string $id)
{
    $category = Category::findOrFail($id);
    $category->delete();

    return redirect()->route('category.index')->with('success', 'Category deleted!');
}

   
}
