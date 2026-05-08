<x-app-layout>
    <div class="py-12 bg-gradient-to-br from-slate-50 via-black to-emerald-50/30 dark:from-gray-900 dark:via-gray-900 dark:to-emerald-950/20 min-h-screen">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 animate-fade-in-up">
            <div class="bg-black/80 dark:bg-gray-800/80 backdrop-blur-xl overflow-hidden shadow-2xl shadow-emerald-500/10 sm:rounded-3xl border border-/20 dark:border-gray-700/50">
                <div class="p-8 text-gray-900 dark:text-gray-100">

                    {{-- Header --}}
                    <div class="flex items-center gap-4 mb-8">
                        <a href="{{ route('category.index') }}" 
                           class="p-2 rounded-xl text-gray-400 hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 transition-all duration-300 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center shadow-md">
                                    <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 01.586 1.414V19a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"></path>
                                    </svg>
                                </div>
                                <h2 class="text-3xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 dark:from-emerald-400 dark:to-teal-400 bg-clip-text text-transparent tracking-tight">Add Category</h2>
                            </div>
                            <p class="text-sm text-gray-500 dark:text-gray-400 ml-10">Create a new category to organize your products</p>
                        </div>
                    </div>

                    {{-- Form --}}
                    <form action="{{ route('category.store') }}" method="POST" class="space-y-6">
                        @csrf

                        {{-- Category Name --}}
                        <div class="group">
                            <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                Category Name <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400 group-focus-within:text-emerald-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 01.586 1.414V19a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"></path>
                                    </svg>
                                </div>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                       placeholder="e.g. Electronics, Clothing, Books, Sports"
                                       class="w-full pl-10 pr-4 py-3 rounded-xl border-2 text-sm 
                                       {{ $errors->has('name') ? 'border-red-400 bg-red-50/50 dark:bg-red-900/20' : 'border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/50' }} 
                                       text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-500 
                                       focus:outline-none focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all duration-300"
                                       required>
                            </div>
                            @error('name')
                                <p class="mt-2 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Tips Card --}}
                        <div class="p-4 rounded-xl bg-gradient-to-r from-emerald-50 to-teal-50 dark:from-emerald-950/30 dark:to-teal-950/30 border border-emerald-200 dark:border-emerald-800">
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-emerald-500 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-emerald-700 dark:text-emerald-300">Tips for good category names:</p>
                                    <ul class="text-xs text-emerald-600 dark:text-emerald-400 mt-1 space-y-1">
                                        <li class="flex items-center gap-1">• Use clear and descriptive names</li>
                                        <li class="flex items-center gap-1">• Keep it short but meaningful (max 50 characters)</li>
                                        <li class="flex items-center gap-1">• Examples: Electronics, Clothing, Home & Living</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- Preview Card (Live Preview) --}}
                        <div class="p-4 rounded-xl bg-black/50 dark:bg-gray-800/50 border border-gray-200 dark:border-gray-700">
                            <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">Live Preview:</p>
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-100 to-teal-100 dark:from-emerald-900/50 dark:to-teal-900/50 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 01.586 1.414V19a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"></path>
                                    </svg>
                                </div>
                                <span id="categoryPreview" class="text-gray-500 dark:text-gray-400 italic">Category name will appear here</span>
                            </div>
                        </div>

                        {{-- Actions --}}
                        <div class="flex items-center justify-end gap-3 pt-6 border-t border-gray-100 dark:border-gray-800">
                            <a href="{{ route('category.index') }}" 
                               class="px-6 py-3 rounded-xl border-2 border-gray-200 dark:border-gray-700 text-sm font-semibold text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-300 hover:scale-105">
                                Cancel
                            </a>
                            <button type="submit" 
                                    class="px-8 py-3 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-black text-sm font-semibold rounded-xl shadow-lg shadow-emerald-500/30 hover:shadow-xl hover:scale-105 transition-all duration-300">
                                ✨ Save Category
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    {{-- Live Preview Script --}}
    <script>
        const nameInput = document.getElementById('name');
        const previewSpan = document.getElementById('categoryPreview');
        
        if (nameInput && previewSpan) {
            nameInput.addEventListener('input', function() {
                const value = this.value.trim();
                if (value) {
                    previewSpan.innerHTML = `<span class="font-semibold text-emerald-600 dark:text-emerald-400">${value}</span>`;
                } else {
                    previewSpan.innerHTML = '<span class="text-gray-500 dark:text-gray-400 italic">Category name will appear here</span>';
                }
            });
        }
    </script>

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
            animation: fade-in-up 0.6s ease-out forwards;
            opacity: 0;
        }
    </style>
</x-app-layout>