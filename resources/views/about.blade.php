<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-200 leading-tight bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent">
                {{ __('About Me') }}
            </h2>
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-indigo-100 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-400">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Student Profile
                </span>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-gray-50 via-black to-indigo-50/30 dark:from-gray-900 dark:via-gray-900 dark:to-indigo-950/20 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Profile Card -->
            <div class="animate-slide-in-up">
                <div class="bg-black/80 dark:bg-gray-800/80 backdrop-blur-xl overflow-hidden shadow-2xl shadow-indigo-500/10 sm:rounded-3xl border border-black/20 dark:border-gray-700/50">
                    
                    <!-- Header Banner -->
                    <div class="relative h-32 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute -bottom-12 left-8">
                            <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-2xl ring-4 ring-black dark:ring-gray-800">
                                <span class="text-5xl text-black dark:text-black font-bold">{{ substr('Ahmad Fauzan Isnata', 0, 1) }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-8 pt-16">
                        <!-- Name Section -->
                        <div class="mb-8">
                            <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
                                Ahmad Fauzan Isnata
                            </h1>
                            <div class="flex items-center gap-2 mt-2">
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                                    Active Student
                                </span>
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400">
                                    Semester 6
                                </span>
                            </div>
                        </div>
                        
                        <!-- Info Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <!-- NIM Card -->
                            <div class="group bg-gradient-to-br from-gray-50 to-indigo-50/30 dark:from-gray-800/50 dark:to-indigo-950/30 rounded-2xl p-5 hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-500 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-4 0h4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Student ID</p>
                                        <p class="text-xl font-bold text-gray-800 dark:text-gray-100 font-mono">20230140225</p>
                                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">NIM / Registration Number</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Program Studi Card -->
                            <div class="group bg-gradient-to-br from-gray-50 to-purple-50/30 dark:from-gray-800/50 dark:to-purple-950/30 rounded-2xl p-5 hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Study Program</p>
                                        <p class="text-lg font-bold text-gray-800 dark:text-gray-100">Teknologi Informasi</p>
                                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">Information Technology</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Hobi Card - Full Width -->
                            <div class="md:col-span-2 group bg-gradient-to-br from-gray-50 to-amber-50/30 dark:from-gray-800/50 dark:to-amber-950/30 rounded-2xl p-5 hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-orange-500 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-black dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Hobby</p>
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-sm font-semibold bg-gradient-to-r from-amber-100 to-orange-100 text-amber-800 dark:from-amber-900/40 dark:to-orange-900/40 dark:text-amber-300">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                                                </svg>
                                                🎤 Singing / Bernyanyi
                                            </span>
                                            <span class="inline-flex items-center gap-1 px-2 py-1 rounded-full text-xs bg-black/50 dark:bg-gray-700/50 text-gray-600 dark:text-gray-400">
                                                Vocalist
                                            </span>
                                            <span class="inline-flex items-center gap-1 px-2 py-1 rounded-full text-xs bg-black/50 dark:bg-gray-700/50 text-gray-600 dark:text-gray-400">
                                                Performer
                                            </span>
                                        </div>
                                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">Passionate about music and vocal expression</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Divider -->
                        <div class="relative my-8">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-200 dark:border-gray-700"></div>
                            </div>
                            <div class="relative flex justify-center">
                                <span class="px-4 bg-black/80 dark:bg-gray-800/80 text-xs text-gray-500 dark:text-gray-400">Student Information</span>
                            </div>
                        </div>
                        
                        <!-- Additional Info -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="text-center p-3 rounded-xl bg-gray-50/50 dark:bg-gray-800/50">
                                <p class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">2023</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Start Year</p>
                            </div>
                            <div class="text-center p-3 rounded-xl bg-gray-50/50 dark:bg-gray-800/50">
                                <p class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">6th</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Semester</p>
                            </div>
                            <div class="text-center p-3 rounded-xl bg-gray-50/50 dark:bg-gray-800/50">
                                <p class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">FTI</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Faculty</p>
                            </div>
                            <div class="text-center p-3 rounded-xl bg-gray-50/50 dark:bg-gray-800/50">
                                <p class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">S1</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Degree</p>
                            </div>
                        </div>
                        
                        <!-- Social Links (Optional) -->
                        <div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-700/50">
                            <div class="flex items-center justify-between flex-wrap gap-4">
                                <p class="text-sm text-gray-500 dark:text-gray-400">Connect with me:</p>
                                <div class="flex gap-3">
                                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center hover:bg-indigo-100 dark:hover:bg-indigo-900/50 transition-all hover:scale-110">
                                        <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.627 0-12 5.373-12 12 0 5.302 3.438 9.8 8.205 11.387.6.113.82-.26.82-.58 0-.287-.01-1.05-.015-2.06-3.338.726-4.042-1.416-4.042-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.73.083-.73 1.205.085 1.838 1.237 1.838 1.237 1.07 1.834 2.807 1.304 3.492.997.108-.775.418-1.305.762-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.468-2.38 1.235-3.22-.123-.3-.535-1.52.117-3.16 0 0 1.008-.322 3.3 1.23.96-.267 1.98-.4 3-.405 1.02.005 2.04.138 3 .405 2.29-1.552 3.297-1.23 3.297-1.23.653 1.64.24 2.86.118 3.16.768.84 1.233 1.91 1.233 3.22 0 4.61-2.804 5.62-5.476 5.92.43.37.824 1.102.824 2.22 0 1.602-.015 2.894-.015 3.287 0 .322.216.698.83.578 4.765-1.588 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center hover:bg-indigo-100 dark:hover:bg-indigo-900/50 transition-all hover:scale-110">
                                        <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0021.968-11.74c0-.213-.005-.425-.015-.636A10.012 10.012 0 0024 4.555z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center hover:bg-indigo-100 dark:hover:bg-indigo-900/50 transition-all hover:scale-110">
                                        <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                                        </svg>
                                    </a>
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
    </style>
</x-app-layout>