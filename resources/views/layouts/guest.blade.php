<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Premium Platform</title>

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
                background: linear-gradient(135deg, #0f0c29 0%, #302b63 50%, #24243e 100%);
                min-height: 100vh;
                position: relative;
                overflow-x: hidden;
            }
            
            /* Animated Background Particles */
            body::before {
                content: '';
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: 
                    radial-gradient(circle at 20% 50%, rgba(255,255,255,0.08) 0%, transparent 50%),
                    radial-gradient(circle at 80% 80%, rgba(255,255,255,0.08) 0%, transparent 50%),
                    radial-gradient(circle at 40% 20%, rgba(255,255,255,0.05) 0%, transparent 50%);
                pointer-events: none;
                z-index: 0;
            }
            
            /* Floating Animation */
            @keyframes float {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(5deg); }
            }
            
            @keyframes float-delayed {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-15px) rotate(-5deg); }
            }
            
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
            
            @keyframes glow-pulse {
                0%, 100% { opacity: 0.6; transform: scale(1); }
                50% { opacity: 1; transform: scale(1.05); }
            }
            
            /* Floating Elements */
            .float-element {
                animation: float 8s ease-in-out infinite;
            }
            
            .float-element-delayed {
                animation: float-delayed 10s ease-in-out infinite;
            }
            
            /* Glassmorphism Effect */
            .glass-card {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            }
            
            /* Gradient Text */
            .gradient-text {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
            }
            
            /* Custom Scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
            }
            
            ::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.1);
                border-radius: 10px;
            }
            
            ::-webkit-scrollbar-thumb {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                border-radius: 10px;
            }
            
            /* Hero Pattern Overlay */
            .hero-pattern {
                background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.05) 1px, transparent 1px);
                background-size: 40px 40px;
            }
            
            /* Slide In Animation */
            .animate-slide-in {
                animation: slide-in-up 0.6s ease-out forwards;
                opacity: 0;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased hero-pattern">
        <!-- Animated Background Elements -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-indigo-500/30 to-purple-500/30 rounded-full blur-3xl float-element"></div>
            <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-br from-pink-500/30 to-rose-500/30 rounded-full blur-3xl float-element-delayed"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-blue-500/20 to-cyan-500/20 rounded-full blur-3xl"></div>
            <div class="absolute top-20 right-20 w-64 h-64 bg-gradient-to-br from-amber-500/20 to-orange-500/20 rounded-full blur-3xl float-element"></div>
            <div class="absolute bottom-20 left-20 w-64 h-64 bg-gradient-to-br from-emerald-500/20 to-teal-500/20 rounded-full blur-3xl float-element-delayed"></div>
        </div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative z-10">
            <!-- Logo Section with Animation -->
            <div class="animate-slide-in">
                <a href="/" class="group flex items-center gap-3 transition-all duration-300 hover:scale-105">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-xl group-hover:shadow-2xl transition-all duration-300">
                        <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <div class="text-left">
                        <span class="text-2xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent block">ProductFlow</span>
                        <span class="text-xs text-black/50">Premium Management System</span>
                    </div>
                </a>
            </div>

            <!-- Main Card Container -->
            <div class="w-full sm:max-w-md mt-8 px-4 sm:px-6 animate-slide-in" style="animation-delay: 0.1s">
                <div class="glass-card rounded-3xl shadow-2xl overflow-hidden">
                    <!-- Header Decoration -->
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500"></div>
                    
                    <div class="p-6 sm:p-8">
                        {{ $slot }}
                    </div>
                </div>
            </div>

            <!-- Footer Note -->
            <div class="mt-8 text-center animate-slide-in" style="animation-delay: 0.2s">
                <p class="text-xs text-black/40">
                    &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
                </p>
                <p class="text-xs text-black/30 mt-1">
                    Secure platform • Your data is protected
                </p>
            </div>
        </div>

        <!-- Additional Script for animation on load -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Add animation class to elements
                const elements = document.querySelectorAll('.animate-slide-in');
                elements.forEach((el, index) => {
                    el.style.animationDelay = `${0.05 * index}s`;
                });
            });
        </script>
    </body>
</html>