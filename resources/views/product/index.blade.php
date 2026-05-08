<x-app-layout>
    <div class="py-12 bg-gradient-to-br from-slate-50 via-black to-indigo-50/30 dark:from-gray-900 dark:via-gray-900 dark:to-indigo-950/20 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 animate-fade-in-up">
            <div class="bg-black/80 dark:bg-gray-800/80 backdrop-blur-xl overflow-hidden shadow-2xl shadow-indigo-500/10 sm:rounded-3xl border border-black/20 dark:border-gray-700/50">
                <div class="p-8 text-gray-900 dark:text-gray-100">

                

                    {{-- Header Section --}}
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
                        <div class="mb-4 md:mb-0">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg">
                                    <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-3xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent tracking-tight">Product List</h2>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Manage your product inventory</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3">
                            @can('manage-products')
                                <x-add-product :url="route('product.create')" :name="'Product'"/>
                            @endcan
                            
                            @can('export-product')
                                <button type="button" class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-green-500 to-emerald-600 border-0 rounded-xl font-semibold text-sm text-black uppercase tracking-wide hover:from-green-600 hover:to-emerald-700 shadow-lg shadow-green-500/30 hover:shadow-xl transition-all duration-300 hover:scale-105">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                    Export Product
                                </button>
                            @endcan

                            

                            <a href="{{ route('product.create') }}" 
                               class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 border-0 rounded-xl font-semibold text-sm text-black uppercase tracking-wide hover:from-indigo-700 hover:to-purple-700 shadow-lg shadow-indigo-500/30 hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                                Add Product
                            </a>
                        </div>
                    </div>

                    {{-- Flash Message --}}
                    @if (session('success'))
                        <div class="mb-6 p-4 bg-gradient-to-r from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20 border-l-4 border-green-500 rounded-xl shadow-sm animate-slide-in">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-green-700 dark:text-green-300 font-medium">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    {{-- Table Section --}}
                    <div class="overflow-hidden rounded-2xl border border-gray-100 dark:border-gray-700/50 shadow-lg">
                        <div class="overflow-x-auto scrollbar-custom">
                            <table class="min-w-full divide-y divide-gray-100 dark:divide-gray-700 text-sm">
                                <thead class="bg-gradient-to-r from-gray-50 to-indigo-50/30 dark:from-gray-800/80 dark:to-indigo-950/30">
                                    <tr>
                                        <th class="px-6 py-4 text-left font-semibold text-gray-700 dark:text-gray-300">#</th>
                                        <th class="px-6 py-4 text-left font-semibold text-gray-700 dark:text-gray-300">Product Name</th>
                                        <th class="px-6 py-4 text-left font-semibold text-gray-700 dark:text-gray-300">Quantity</th>
                                        <th class="px-6 py-4 text-left font-semibold text-gray-700 dark:text-gray-300">Price</th>
                                        <th class="px-6 py-4 text-left font-semibold text-gray-700 dark:text-gray-300">Owner</th>
                                        <th class="px-6 py-4 text-center font-semibold text-gray-700 dark:text-gray-300">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-black dark:bg-gray-800/50 divide-y divide-gray-50 dark:divide-gray-700/50">
                                    @forelse ($products as $product)
                                        <tr class="table-row-hover group transition-all duration-300 hover:bg-gradient-to-r hover:from-indigo-50/50 hover:to-transparent dark:hover:from-indigo-950/30">
                                            <td class="px-6 py-4 text-gray-500 dark:text-gray-400 font-medium">{{ $loop->iteration }}</td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-indigo-100 to-purple-100 dark:from-indigo-900/50 dark:to-purple-900/50 flex items-center justify-center">
                                                        <svg class="w-4 h-4 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-bold text-gray-800 dark:text-gray-200">{{ $product->name }}</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-bold 
                                                    {{ $product->qty > 5 ? 'bg-gradient-to-r from-green-100 to-emerald-100 text-green-700 dark:from-green-900/40 dark:to-emerald-900/40 dark:text-green-300' : 'bg-gradient-to-r from-red-100 to-rose-100 text-red-700 dark:from-red-900/40 dark:to-rose-900/40 dark:text-red-300' }}">
                                                    <span class="w-1.5 h-1.5 rounded-full {{ $product->qty > 5 ? 'bg-green-500' : 'bg-red-500' }}"></span>
                                                    {{ $product->qty }} units
                                                </span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="font-mono font-bold text-gray-800 dark:text-gray-200 bg-gray-100 dark:bg-gray-700/50 px-2 py-1 rounded-lg">
                                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-2">
                                                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-black text-xs font-bold shadow-md">
                                                        {{ substr($product->user->name ?? '?', 0, 1) }}
                                                    </div>
                                                    <span class="text-gray-600 dark:text-gray-400">{{ $product->user->name ?? '-' }}</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex justify-center items-center gap-2">
                                                    <a href="{{ route('product.show', $product->id) }}" 
                                                       class="px-3 py-1.5 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-lg text-xs font-semibold hover:bg-indigo-100 dark:hover:bg-indigo-900/50 transition-all duration-300 hover:scale-105 inline-flex items-center gap-1">
                                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                        View
                                                    </a>
                                                    
                                                    @can('update', $product)
                                                        <a href="{{ route('product.edit', $product) }}" 
                                                           class="px-3 py-1.5 bg-amber-50 dark:bg-amber-900/30 text-amber-600 dark:text-amber-400 rounded-lg text-xs font-semibold hover:bg-amber-100 dark:hover:bg-amber-900/50 transition-all duration-300 hover:scale-105 inline-flex items-center gap-1">
                                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    @endcan

                                                    @can('delete', $product)
                                                        <form action="{{ route('product.delete', $product->id) }}" method="POST" onsubmit="return confirm('Hapus produk ini?')" class="inline">
                                                            @csrf @method('DELETE')
                                                            <button type="submit" 
                                                                    class="px-3 py-1.5 bg-red-50 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-lg text-xs font-semibold hover:bg-red-100 dark:hover:bg-red-900/50 transition-all duration-300 hover:scale-105 inline-flex items-center gap-1">
                                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                </svg>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="px-6 py-16 text-center">
                                                <div class="flex flex-col items-center justify-center">
                                                    <div class="w-20 h-20 mb-4 rounded-full bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-800 dark:to-gray-700 flex items-center justify-center">
                                                        <svg class="w-10 h-10 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                                        </svg>
                                                    </div>
                                                    <p class="text-gray-400 dark:text-gray-500 text-lg font-medium">No products found</p>
                                                    <p class="text-gray-400 dark:text-gray-500 text-sm mt-1">Please add a product to get started</p>
                                                    <a href="{{ route('product.create') }}" class="mt-4 px-6 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-black rounded-xl text-sm font-semibold hover:shadow-lg transition-all hover:scale-105">
                                                        + Add Your First Product
                                                    </a>
                                                </div>
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

    {{-- Custom Styles --}}
    <style>
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slide-in {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fade-in-up 0.6s ease-out;
        }
        
        .animate-slide-in {
            animation: slide-in 0.4s ease-out;
        }
        
        .table-row-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scrollbar-custom::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }
        
        .scrollbar-custom::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.05);
            border-radius: 10px;
        }
        
        .scrollbar-custom::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
        }
        
        .dark .scrollbar-custom::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }
    </style>
</x-app-layout>