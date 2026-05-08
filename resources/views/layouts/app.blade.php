<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Premium Management System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800|plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            /* Custom Global Styles */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: 'Inter', 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
                background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
                min-height: 100vh;
                position: relative;
            }
            
            /* Dark Mode Background */
            .dark body {
                background: linear-gradient(135deg, #0f0c29 0%, #1a1a3e 50%, #24243e 100%);
            }
            
            /* Animated Background Pattern */
            body::before {
                content: '';
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-image: radial-gradient(circle at 1px 1px, rgba(99, 102, 241, 0.1) 1px, transparent 1px);
                background-size: 40px 40px;
                pointer-events: none;
                z-index: 0;
            }
            
            .dark body::before {
                background-image: radial-gradient(circle at 1px 1px, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            }
            
            /* Floating Animation for Background */
            @keyframes float-bg {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(5deg); }
            }
            
            @keyframes float-bg-delayed {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-15px) rotate(-5deg); }
            }
            
            /* Floating Background Elements */
            .bg-float {
                animation: float-bg 12s ease-in-out infinite;
            }
            
            .bg-float-delayed {
                animation: float-bg-delayed 15s ease-in-out infinite;
            }
            
            /* Custom Scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
                height: 8px;
            }
            
            ::-webkit-scrollbar-track {
                background: rgba(0, 0, 0, 0.05);
                border-radius: 10px;
            }
            
            ::-webkit-scrollbar-thumb {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                border-radius: 10px;
            }
            
            .dark ::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.05);
            }
            
            /* Page Transition Animation */
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            main {
                animation: fadeIn 0.4s ease-out;
                position: relative;
                z-index: 1;
            }
            
            /* Glassmorphism Enhancement */
            .glass-header {
                background: rgba(255, 255, 255, 0.8);
                backdrop-filter: blur(20px);
                border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            }
            
            .dark .glass-header {
                background: rgba(17, 24, 39, 0.8);
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }
            
            /* Smooth Loading */
            .page-transition {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <!-- Floating Background Elements -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded-full blur-3xl bg-float"></div>
            <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-br from-pink-500/20 to-rose-500/20 rounded-full blur-3xl bg-float-delayed"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-blue-500/10 to-cyan-500/10 rounded-full blur-3xl"></div>
            <div class="absolute top-20 right-20 w-64 h-64 bg-gradient-to-br from-amber-500/10 to-orange-500/10 rounded-full blur-3xl bg-float"></div>
            <div class="absolute bottom-20 left-20 w-64 h-64 bg-gradient-to-br from-emerald-500/10 to-teal-500/10 rounded-full blur-3xl bg-float-delayed"></div>
        </div>

        <div class="min-h-screen relative z-10">
            <!-- Navigation -->
            @include('layouts.navigation')

            <!-- Page Header with Glassmorphism -->
            @isset($header)
                <header class="glass-header shadow-sm sticky top-16 z-40">
                    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-1 h-8 rounded-full bg-gradient-to-b from-indigo-500 to-purple-600"></div>
                                {{ $header }}
                            </div>
                            
                            <!-- Quick Status Indicator -->
                            <div class="hidden sm:flex items-center gap-2">
                                <div class="flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-green-100 dark:bg-green-900/30">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                                    <span class="text-xs font-medium text-green-700 dark:text-green-300">System Online</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            @endisset

            <!-- Page Content with Enhanced Spacing -->
            <main class="relative">
                {{ $slot }}
            </main>
            
            <!-- Footer (Optional) -->
            <footer class="mt-12 py-6 border-t border-gray-200 dark:border-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
                        </p>
                        <div class="flex items-center gap-4">
                            <span class="text-xs text-gray-400 dark:text-gray-500">v1.0.0</span>
                            <span class="w-1 h-1 rounded-full bg-gray-300 dark:bg-gray-600"></span>
                            <span class="text-xs text-gray-400 dark:text-gray-500">Secure Connection</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        
        <!-- Alpine.js initialization for smooth transitions -->
        <script>
            document.addEventListener('alpine:init', () => {
                // Add any global Alpine.js stores or components here
                console.log('Application ready');
            });
            
            // Add page transition class to main content
            document.addEventListener('DOMContentLoaded', () => {
                const main = document.querySelector('main');
                if (main) {
                    main.classList.add('page-transition');
                }
            });
        </script>
    </body>
</html>