<x-app-layout>
    <div class="py-12 bg-gradient-to-br from-slate-50 via-white to-indigo-50/30 dark:from-gray-900 dark:via-gray-900 dark:to-indigo-950/20 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 animate-fade-in-up">
            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl overflow-hidden shadow-2xl shadow-indigo-500/10 sm:rounded-3xl border border-white/20 dark:border-gray-700/50">
                <div class="p-8 text-gray-900 dark:text-gray-100">

                    {{-- Header Section --}}
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
                        <div class="mb-4 md:mb-0">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg">
                                    <svg class="w-5 h-5 text-black
                                    " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 01.586 1.414V19a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-3xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent tracking-tight">Category List</h2>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Manage your product categories</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="{{ route('category.create') }}" 
                           class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 border-0 rounded-xl font-semibold text-sm text-black uppercase tracking-wide hover:from-indigo-700 hover:to-purple-700 shadow-lg shadow-indigo-500/30 hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Add Category
                        </a>
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
                                        <th class="px-6 py-4 text-left font-semibold text-gray-700 dark:text-gray-300">Category Name</th>
                                        <th class="px-6 py-4 text-center font-semibold text-gray-700 dark:text-gray-300">Total Products</th>
                                        <th class="px-6 py-4 text-center font-semibold text-gray-700 dark:text-gray-300">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-black dark:bg-gray-800/50 divide-y divide-gray-50 dark:divide-gray-700/50">
                                    @forelse($categories as $category)
                                        <tr class="table-row-hover group transition-all duration-300 hover:bg-gradient-to-r hover:from-indigo-50/50 hover:to-transparent dark:hover:from-indigo-950/30">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-indigo-100 to-purple-100 dark:from-indigo-900/50 dark:to-purple-900/50 flex items-center justify-center">
                                                        <svg class="w-4 h-4 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 01.586 1.414V19a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-bold text-gray-800 dark:text-gray-200">{{ $category->name }}</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-bold bg-gradient-to-r from-indigo-100 to-purple-100 text-indigo-700 dark:from-indigo-900/40 dark:to-purple-900/40 dark:text-indigo-300">
                                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                    </svg>
                                                    {{ $category->products_count }} products
                                                </span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex justify-center items-center gap-2">
                                                    <a href="{{ route('category.edit', $category->id) }}" 
                                                       class="px-3 py-1.5 bg-amber-50 dark:bg-amber-900/30 text-amber-600 dark:text-amber-400 rounded-lg text-xs font-semibold hover:bg-amber-100 dark:hover:bg-amber-900/50 transition-all duration-300 hover:scale-105 inline-flex items-center gap-1">
                                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                    
                                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" 
                                                                class="px-3 py-1.5 bg-red-50 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-lg text-xs font-semibold hover:bg-red-100 dark:hover:bg-red-900/50 transition-all duration-300 hover:scale-105 inline-flex items-center gap-1">
                                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                            </svg>
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="px-6 py-16 text-center">
                                                <div class="flex flex-col items-center justify-center">
                                                    <div class="w-20 h-20 mb-4 rounded-full bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-800 dark:to-gray-700 flex items-center justify-center">
                                                        <svg class="w-10 h-10 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 01.586 1.414V19a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"></path>
                                                        </svg>
                                                    </div>
                                                    <p class="text-gray-400 dark:text-gray-500 text-lg font-medium">No categories found</p>
                                                    <p class="text-gray-400 dark:text-gray-500 text-sm mt-1">Please add a category to get started</p>
                                                    <a href="{{ route('category.create') }}" class="mt-4 px-6 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-black rounded-xl text-sm font-semibold hover:shadow-lg transition-all hover:scale-105">
                                                        + Add Your First Category
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
            animation: fade-in-up 0.6s ease-out forwards;
            opacity: 0;
        }
        
        .animate-slide-in {
            animation: slide-in 0.4s ease-out forwards;
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