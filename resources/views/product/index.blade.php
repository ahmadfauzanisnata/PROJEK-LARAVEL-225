<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- Header Section: Di luar tabel agar tidak hilang saat data kosong --}}
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
                      <div>
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 tracking-tight">Product List</h2>
        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Manage your product inventory</p>
    </div>
    @can('manage-products')
        <x-add-product :url="route('product.create')" :name="'Product'"/>
    @endcan
                        
                        <div class="flex items-center gap-3">
                            @can('export-product')
                                <button type="button" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-green-700 shadow-sm transition">
                                    Export Product
                                </button>
                            @endcan

                            <a href="{{ route('product.create') }}" 
                               class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-indigo-700 shadow-sm transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                                Add Product
                            </a>
                        </div>
                    </div>

                    {{-- Flash Message --}}
                    @if (session('success'))
                        <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 dark:bg-green-900/30 dark:text-green-300">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Table Section --}}
                    <div class="overflow-hidden rounded-lg border border-gray-200 dark:border-gray-700">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 text-sm">
                                <thead class="bg-gray-50 dark:bg-gray-700/50">
                                    <tr>
                                        <th class="px-6 py-3 text-left font-semibold">#</th>
                                        <th class="px-6 py-3 text-left font-semibold">Name</th>
                                        <th class="px-6 py-3 text-left font-semibold">Qty</th>
                                        <th class="px-6 py-3 text-left font-semibold">Price</th>
                                        <th class="px-6 py-3 text-left font-semibold">Owner</th>
                                        <th class="px-6 py-3 text-center font-semibold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-100 dark:divide-gray-700">
                                    @forelse ($products as $product)
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                            <td class="px-6 py-4 font-bold">{{ $product->name }}</td>
                                            <td class="px-6 py-4">
                                                <span class="px-2 py-1 rounded-full text-xs font-medium {{ $product->qty > 5 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ $product->qty }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                            <td class="px-6 py-4 text-gray-500">{{ $product->user->name ?? '-' }}</td>
                                            <td class="px-6 py-4">
                                                <div class="flex justify-center items-center gap-3">
                                                    <a href="{{ route('product.show', $product->id) }}" class="text-indigo-600 hover:underline">View</a>
                                                    
                                                    @can('update', $product)
                                                        <a href="{{ route('product.edit', $product) }}" class="text-amber-600 hover:underline">Edit</a>
                                                    @endcan

                                                    @can('delete', $product)
                                                        <form action="{{ route('product.delete', $product->id) }}" method="POST" onsubmit="return confirm('Hapus produk ini?')">
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                                        </form>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="px-6 py-12 text-center text-gray-400 italic">
                                                No products found. Please add a product.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>