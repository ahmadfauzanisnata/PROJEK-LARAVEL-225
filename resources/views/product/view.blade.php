<x-app-layout>
    <div class="py-12 bg-gradient-to-br from-slate-50 via-white to-indigo-50/30 dark:from-gray-900 dark:via-gray-900 dark:to-indigo-950/20 min-h-screen">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 animate-fade-in-up">
            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl overflow-hidden shadow-2xl shadow-indigo-500/10 sm:rounded-3xl border border-white/20 dark:border-gray-700/50">
                <div class="p-8 text-gray-900 dark:text-gray-100">

                    {{-- Header --}}
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex items-center gap-4">
                            <a href="{{ route('product.index') }}" 
                               class="p-2 rounded-xl text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-indigo-900/30 transition-all duration-300 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                            </a>
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-md">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-3xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent tracking-tight">Product Detail</h2>
                                </div>
                                <p class="text-sm text-gray-500 dark:text-gray-400 ml-10">Viewing product #{{ $product->id }}</p>
                            </div>
                        </div>

                        {{-- Action Buttons --}}
                        <div class="flex items-center gap-2">
                            <a href="{{ route('product.edit', $product) }}" 
                               class="inline-flex items-center gap-2 px-4 py-2.5 text-sm font-semibold rounded-xl bg-gradient-to-r from-amber-500 to-orange-500 text-black shadow-lg shadow-amber-500/30 hover:shadow-xl hover:scale-105 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                Edit
                            </a>
                            <form action="{{ route('product.delete', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="inline-flex items-center gap-2 px-4 py-2.5 text-sm font-semibold rounded-xl bg-gradient-to-r from-red-500 to-pink-500 text-black shadow-lg shadow-red-500/30 hover:shadow-xl hover:scale-105 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>

                    {{-- Detail Card --}}
                    <div class="rounded-2xl border border-gray-100 dark:border-gray-700/50 divide-y divide-gray-100 dark:divide-gray-700/50 overflow-hidden shadow-lg">
                        
                        {{-- Header Banner --}}
                        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-indigo-950/30 dark:to-purple-950/30 px-6 py-4">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 uppercase tracking-wider">Product Information</span>
                            </div>
                        </div>

                        {{-- Name --}}
                        <div class="flex items-center px-6 py-5 gap-4 hover:bg-gray-50/50 dark:hover:bg-gray-700/30 transition-colors duration-300">
                            <div class="w-32 shrink-0">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                    </svg>
                                    <span class="text-sm font-semibold text-gray-500 dark:text-gray-400">Product Name</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="text-base font-bold text-gray-900 dark:text-gray-100 bg-gradient-to-r from-gray-800 to-gray-600 dark:from-gray-200 dark:to-gray-400 bg-clip-text text-transparent">
                                    {{ $product->name }}
                                </div>
                            </div>
                        </div>

                        {{-- Quantity --}}
                        <div class="flex items-center px-6 py-5 gap-4 hover:bg-gray-50/50 dark:hover:bg-gray-700/30 transition-colors duration-300">
                            <div class="w-32 shrink-0">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                    </svg>
                                    <span class="text-sm font-semibold text-gray-500 dark:text-gray-400">Quantity</span>
                                </div>
                            </div>
                            <div>
                                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-bold 
                                    {{ $product->qty > 10 
                                        ? 'bg-gradient-to-r from-green-100 to-emerald-100 text-green-700 dark:from-green-900/40 dark:to-emerald-900/40 dark:text-green-300' 
                                        : 'bg-gradient-to-r from-red-100 to-rose-100 text-red-700 dark:from-red-900/40 dark:to-rose-900/40 dark:text-red-300' }}">
                                    <span class="w-2 h-2 rounded-full {{ $product->qty > 10 ? 'bg-green-500' : 'bg-red-500' }} animate-pulse"></span>
                                    {{ $product->qty }} units
                                    <span class="text-xs opacity-75">{{ $product->qty > 10 ? '✓ In Stock' : '⚠ Low Stock' }}</span>
                                </span>
                            </div>
                        </div>

                        {{-- Price --}}
                        <div class="flex items-center px-6 py-5 gap-4 hover:bg-gray-50/50 dark:hover:bg-gray-700/30 transition-colors duration-300">
                            <div class="w-32 shrink-0">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-sm font-semibold text-gray-500 dark:text-gray-400">Price</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="text-2xl font-mono font-bold bg-gradient-to-r from-emerald-600 to-teal-600 dark:from-emerald-400 dark:to-teal-400 bg-clip-text text-transparent">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </div>
                            </div>
                        </div>

                        {{-- Owner --}}
                        <div class="flex items-center px-6 py-5 gap-4 hover:bg-gray-50/50 dark:hover:bg-gray-700/30 transition-colors duration-300">
                            <div class="w-32 shrink-0">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    <span class="text-sm font-semibold text-gray-500 dark:text-gray-400">Owner</span>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white text-sm font-bold uppercase shadow-md ring-4 ring-indigo-100 dark:ring-indigo-900/30">
                                        {{ substr($product->user->name ?? '?', 0, 1) }}
                                    </div>
                                    <div>
                                        <span class="text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $product->user->name ?? '-' }}</span>
                                        <p class="text-xs text-gray-400">Product Owner</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Timestamps Divider --}}
                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800/50 dark:to-gray-800/50 px-6 py-3">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Timeline Information</span>
                            </div>
                        </div>

                        {{-- Created At --}}
                        <div class="flex items-center px-6 py-4 gap-4 hover:bg-gray-50/50 dark:hover:bg-gray-700/30 transition-colors duration-300">
                            <div class="w-32 shrink-0">
                                <span class="text-xs text-gray-500 dark:text-gray-400">Created At</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">
                                        {{ $product->created_at->format('d M Y, H:i') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        {{-- Updated At --}}
                        <div class="flex items-center px-6 py-4 gap-4 hover:bg-gray-50/50 dark:hover:bg-gray-700/30 transition-colors duration-300">
                            <div class="w-32 shrink-0">
                                <span class="text-xs text-gray-500 dark:text-gray-400">Updated At</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                    </svg>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">
                                        {{ $product->updated_at->format('d M Y, H:i') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

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
        
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }
        
        .animate-fade-in-up {
            animation: fade-in-up 0.6s ease-out;
        }
        
        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
</x-app-layout>