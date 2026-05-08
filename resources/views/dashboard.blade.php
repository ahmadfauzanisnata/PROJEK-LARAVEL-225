<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-200 leading-tight bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent">
                {{ __('Dashboard') }}
            </h2>
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                    Active Session
                </span>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-gray-50 via-black to-indigo-50/30 dark:from-gray-900 dark:via-gray-900 dark:to-indigo-950/20 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="animate-slide-in-up mb-8">
                <div class="bg-black/80 dark:bg-gray-800/80 backdrop-blur-xl overflow-hidden shadow-2xl shadow-indigo-500/10 sm:rounded-3xl border border-black/20 dark:border-gray-700/50">
                    <div class="p-8">
                        <div class="flex items-center gap-4 flex-wrap">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg">
                                <svg class="w-8 h-8 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
                                    Welcome back, <span class="bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent">{{ Auth::user()->name }}</span>
                                </h3>
                                <p class="text-gray-500 dark:text-gray-400 mt-1">Here's what's happening with your application today.</p>
                            </div>
                            <div class="text-sm text-gray-400 dark:text-gray-500">
                                {{ now()->format('l, d F Y') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Products Card -->
                <div class="group animate-slide-in-up stagger-1">
                    <div class="bg-black/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl shadow-lg border border-black/20 dark:border-gray-700/50 p-6 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-500 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <span class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{ \App\Models\Product::count() }}</span>
                        </div>
                        <h4 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Total Products</h4>
                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">All products in inventory</p>
                    </div>
                </div>

                <!-- Total Users Card -->
                <div class="group animate-slide-in-up stagger-2">
                    <div class="bg-black/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl shadow-lg border border-black/20 dark:border-gray-700/50 p-6 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <span class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{ \App\Models\User::count() }}</span>
                        </div>
                        <h4 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Total Users</h4>
                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">Registered members</p>
                    </div>
                </div>

                <!-- Total Value Card -->
                <div class="group animate-slide-in-up stagger-3">
                    <div class="bg-black/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl shadow-lg border border-black/20 dark:border-gray-700/50 p-6 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-3xl font-bold text-gray-800 dark:text-gray-100">Rp {{ number_format(\App\Models\Product::sum('price'), 0, ',', '.') }}</span>
                        </div>
                        <h4 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Total Value</h4>
                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">Inventory total value</p>
                    </div>
                </div>

                <!-- Average Price Card -->
                <div class="group animate-slide-in-up stagger-4">
                    <div class="bg-black/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl shadow-lg border border-black/20 dark:border-gray-700/50 p-6 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-orange-500 to-red-500 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 <PASSWORD>1<PASSWORD>h<PASSWORD>a<PASSWORD> <PASSWORD>v14a<PASSWORD> <PASSWORD> <PASSWORD> -<PASSWORD> <PASSWORD>h-<PASSWORD>a<PASSWORD> <PASSWORD> <PASSWORD>z"></path>
                                </svg>
                            </div>
                            <span class="text-3xl font-bold text-gray-800 dark:text-gray-100">Rp {{ number_format(\App\Models\Product::avg('price') ?? 0, 0, ',', '.') }}</span>
                        </div>
                        <h4 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Average Price</h4>
                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">Per product average</p>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Recent Products -->
                <div class="animate-slide-in-up stagger-5">
                    <div class="bg-black/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl shadow-lg border border-black/20 dark:border-gray-700/50 overflow-hidden">
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700/50">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                                        <svg class="w-5 h-5 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-800 dark:text-gray-100">Recent Products</h3>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Latest added items</p>
                                    </div>
                                </div>
                                <a href="{{ route('product.index') }}" class="text-xs text-indigo-600 dark:text-indigo-400 hover:underline">View all →</a>
                            </div>
                        </div>
                        <div class="divide-y divide-gray-100 dark:divide-gray-700/50">
                            @forelse (\App\Models\Product::latest()->take(5)->get() as $product)
                            <div class="p-4 hover:bg-gray-50/50 dark:hover:bg-gray-700/30 transition-colors">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-100 to-purple-100 dark:from-indigo-900/50 dark:to-purple-900/50 flex items-center justify-center">
                                            <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-800 dark:text-gray-200">{{ $product->name }}</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">Added {{ $product->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-bold text-emerald-600 dark:text-emerald-400">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Qty: {{ $product->qty }}</p>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="p-8 text-center text-gray-400">
                                <p>No products yet</p>
                                <a href="{{ route('product.create') }}" class="inline-block mt-2 text-indigo-600 hover:underline">Add your first product →</a>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="animate-slide-in-up stagger-6">
                    <div class="bg-black/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl shadow-lg border border-black/20 dark:border-gray-700/50 p-6">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-amber-500 to-orange-500 flex items-center justify-center">
                                <svg class="w-5 h-5 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 dark:text-gray-100">Quick Actions</h3>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Frequently used operations</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <a href="{{ route('product.create') }}" class="group flex flex-col items-center gap-2 p-4 rounded-xl bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-indigo-950/30 dark:to-purple-950/30 hover:shadow-md transition-all hover:-translate-y-1">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Add Product</span>
                            </a>
                            <a href="{{ route('product.index') }}" class="group flex flex-col items-center gap-2 p-4 rounded-xl bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-indigo-950/30 dark:to-purple-950/30 hover:shadow-md transition-all hover:-translate-y-1">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">View Products</span>
                            </a>
                            <a href="{{ route('profile.edit') }}" class="group flex flex-col items-center gap-2 p-4 rounded-xl bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-indigo-950/30 dark:to-purple-950/30 hover:shadow-md transition-all hover:-translate-y-1">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Settings</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="contents">
                                @csrf
                                <button type="submit" class="group flex flex-col items-center gap-2 p-4 rounded-xl bg-gradient-to-br from-red-50 to-pink-50 dark:from-red-950/30 dark:to-pink-950/30 hover:shadow-md transition-all hover:-translate-y-1">
                                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-red-500 to-pink-600 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Custom Animations --}}
    <style>
        @keyframes slide-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-slide-in-up {
            animation: slide-in-up 0.6s ease-out forwards;
            opacity: 0;
        }
        
        .stagger-1 { animation-delay: 0.05s; }
        .stagger-2 { animation-delay: 0.1s; }
        .stagger-3 { animation-delay: 0.15s; }
        .stagger-4 { animation-delay: 0.2s; }
        .stagger-5 { animation-delay: 0.25s; }
        .stagger-6 { animation-delay: 0.3s; }
    </style>
</x-app-layout>