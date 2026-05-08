<a href="{{ $url }}"
   class="group relative inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-black text-sm font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-xl transition-all duration-300 hover:scale-105 overflow-hidden">
    
    <!-- Animated background effect -->
    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-black/0 via-black/20 to-black/0 -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-in-out"></span>
    
    <!-- Plus Icon with animation -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:rotate-90 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
    </svg>
    
    <span class="relative">{{ $name }}</span>
    
    <!-- Optional: Shortcut hint -->
    <span class="hidden sm:inline-flex text-xs opacity-60 group-hover:opacity-100 transition-opacity">Ctrl + N</span>
</a>

<!-- Alternative Compact Version -->
@isset($compact)
<a href="{{ $url }}"
   class="group inline-flex items-center justify-center w-9 h-9 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-black shadow-lg shadow-indigo-500/30 hover:shadow-xl transition-all duration-300 hover:scale-105">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:rotate-90 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
    </svg>
</a>
@endisset

<!-- Alternative Outline Version -->
@isset($outline)
<a href="{{ $url }}"
   class="group inline-flex items-center gap-2 px-5 py-2.5 bg-transparent border-2 border-indigo-500/50 hover:border-indigo-600 text-indigo-600 dark:text-indigo-400 hover:text-indigo-700 dark:hover:text-indigo-300 text-sm font-semibold rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-lg">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:rotate-90 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
    </svg>
    {{ $name }}
</a>
@endisset