<x-app-layout>
    <div class="py-12 bg-gradient-to-br from-slate-50 via-white to-amber-50/30 dark:from-gray-900 dark:via-gray-900 dark:to-amber-950/20 min-h-screen">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 animate-fade-in-up">
            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl overflow-hidden shadow-2xl shadow-amber-500/10 sm:rounded-3xl border border-white/20 dark:border-gray-700/50">
                <div class="p-8 text-gray-900 dark:text-gray-100">

                    {{-- Header --}}
                    <div class="flex items-center gap-4 mb-8">
                        <a href="{{ route('product.show', $product) }}" 
                           class="p-2 rounded-xl text-gray-400 hover:text-amber-600 dark:hover:text-amber-400 hover:bg-amber-50 dark:hover:bg-amber-900/30 transition-all duration-300 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                        <div>
                            <h2 class="text-3xl font-bold bg-gradient-to-r from-amber-600 to-orange-600 dark:from-amber-400 dark:to-orange-400 bg-clip-text text-transparent tracking-tight">Edit Product</h2>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Update details for <span class="font-semibold text-amber-600 dark:text-amber-400">{{ $product->name }}</span></p>
                        </div>
                    </div>

                    <form id="delete-product-form" action="{{ route('product.delete', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>

                    {{-- Form --}}
                    <form action="{{ route('product.update', $product) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        {{-- Name --}}
                        <div class="group">
                            <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                Product Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="name" name="name" 
                                   value="{{ old('name', $product->name) }}" placeholder="e.g. Wireless Headphones"
                                   class="w-full px-5 py-3 rounded-xl border-2 text-sm 
                                   {{ $errors->has('name') ? 'border-red-400 bg-red-50/50 dark:bg-red-900/20' : 'border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/50' }} 
                                   text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-500 
                                   focus:outline-none focus:ring-4 focus:ring-amber-500/20 focus:border-amber-500 transition-all duration-300">
                            @error('name')
                                <p class="mt-2 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Qty & Price --}}
                        <div class="grid grid-cols-2 gap-5">
                            <div>
                                <label for="qty" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                    Quantity <span class="text-red-500">*</span>
                                </label>
                                <input type="number" id="qty" name="qty" 
                                       value="{{ old('qty', $product->qty) }}" placeholder="0" min="0"
                                       class="w-full px-5 py-3 rounded-xl border-2 text-sm
                                       {{ $errors->has('qty') ? 'border-red-400 bg-red-50/50 dark:bg-red-900/20' : 'border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/50' }}
                                       text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-500
                                       focus:outline-none focus:ring-4 focus:ring-amber-500/20 focus:border-amber-500 transition-all duration-300">
                                @error('qty')
                                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="price" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                    Price (Rp) <span class="text-red-500">*</span>
                                </label>
                                <input type="number" id="price" name="price" 
                                       value="{{ old('price', $product->price) }}" placeholder="0" min="0" step="0.01"
                                       class="w-full px-5 py-3 rounded-xl border-2 text-sm
                                       {{ $errors->has('price') ? 'border-red-400 bg-red-50/50 dark:bg-red-900/20' : 'border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/50' }}
                                       text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-500
                                       focus:outline-none focus:ring-4 focus:ring-amber-500/20 focus:border-amber-500 transition-all duration-300">
                                @error('price')
                                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- User --}}
                        <div>
                            <label for="user_id" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                Owner <span class="text-red-500">*</span>
                            </label>
                            <select id="user_id" name="user_id"
                                    class="w-full px-5 py-3 rounded-xl border-2 text-sm
                                    {{ $errors->has('user_id') ? 'border-red-400 bg-red-50/50 dark:bg-red-900/20' : 'border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/50' }}
                                    text-gray-900 dark:text-gray-100
                                    focus:outline-none focus:ring-4 focus:ring-amber-500/20 focus:border-amber-500 transition-all duration-300 cursor-pointer">
                                <option value="">-- Select Owner --</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ old('user_id', $product->user_id) == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- Category --}}
<div class="mb-4">
    <label for="category_id" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
        Category <span class="text-red-500">*</span>
    </label>
    <select id="category_id" name="category_id"
            class="w-full px-5 py-3 rounded-xl border-2 text-sm
            {{ $errors->has('category_id') ? 'border-red-400 bg-red-50/50 dark:bg-red-900/20' : 'border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/50' }}
            text-gray-900 dark:text-gray-100
            focus:outline-none focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all duration-300 cursor-pointer">
        <option value="">-- Select Category --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ (old('category_id', $product->category_id) == $category->id) ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
    @enderror
</div>

                        {{-- Actions --}}
                        <div class="flex items-center justify-between pt-6 border-t border-gray-100 dark:border-gray-800">
                            <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this product?')"
                                    form="delete-product-form"
                                    class="inline-flex items-center gap-2 px-5 py-3 text-sm font-semibold rounded-xl text-red-600 bg-red-50 dark:bg-red-900/20 hover:bg-red-100 dark:hover:bg-red-900/40 transition-all duration-300 hover:scale-105 group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Delete Product
                            </button>

                            <div class="flex items-center gap-3">
                                <a href="{{ route('product.show', $product) }}" 
                                   class="px-6 py-3 rounded-xl border-2 border-gray-200 dark:border-gray-700 text-sm font-semibold text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-300 hover:scale-105">
                                    Cancel
                                </a>
                                <button type="submit" 
                                        class="px-8 py-3 bg-gradient-to-r from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-black text-sm font-semibold rounded-xl shadow-lg shadow-amber-500/30 hover:shadow-xl hover:scale-105 transition-all duration-300">
                                    ✨ Update Product
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    {{-- Custom Animations --}}
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
        .animate-fade-in-up {
            animation: fade-in-up 0.6s ease-out;
        }
    </style>
</x-app-layout>