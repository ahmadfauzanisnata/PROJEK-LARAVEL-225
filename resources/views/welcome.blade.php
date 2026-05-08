<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel - Premium Development Platform</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800|plus-jakarta-sans:400,500,600,700,800" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* Modern Reset & Base Styles */
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
                
                @keyframes glow-pulse {
                    0%, 100% { opacity: 0.6; transform: scale(1); }
                    50% { opacity: 1; transform: scale(1.05); }
                }
                
                @keyframes slide-in-up {
                    from {
                        opacity: 0;
                        transform: translateY(50px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
                
                @keyframes slide-in-left {
                    from {
                        opacity: 0;
                        transform: translateX(-50px);
                    }
                    to {
                        opacity: 1;
                        transform: translateX(0);
                    }
                }
                
                @keyframes slide-in-right {
                    from {
                        opacity: 0;
                        transform: translateX(50px);
                    }
                    to {
                        opacity: 1;
                        transform: translateX(0);
                    }
                }
                
                /* Premium Glassmorphism */
                .glass-premium {
                    background: rgba(255, 255, 255, 0.05);
                    backdrop-filter: blur(20px);
                    border: 1px solid rgba(255, 255, 255, 0.1);
                    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
                }
                
                .glass-card-premium {
                    background: rgba(255, 255, 255, 0.95);
                    backdrop-filter: blur(10px);
                    border-radius: 32px;
                    box-shadow: 0 20px 60px rgba(0,0,0,0.3), 0 0 0 1px rgba(255,255,255,0.1);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                }
                
                .glass-card-premium:hover {
                    transform: translateY(-10px);
                    box-shadow: 0 30px 80px rgba(0,0,0,0.4);
                }
                
                /* Gradient Text */
                .gradient-text-premium {
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
                    -webkit-background-clip: text;
                    background-clip: text;
                    color: transparent;
                    animation: glow-pulse 3s ease-in-out infinite;
                }
                
                /* Premium Button */
                .btn-premium {
                    position: relative;
                    overflow: hidden;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    transition: all 0.3s ease;
                    z-index: 1;
                }
                
                .btn-premium::before {
                    content: '';
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 0;
                    height: 0;
                    border-radius: 50%;
                    background: rgba(255,255,255,0.3);
                    transform: translate(-50%, -50%);
                    transition: width 0.6s, height 0.6s;
                    z-index: -1;
                }
                
                .btn-premium:hover::before {
                    width: 300px;
                    height: 300px;
                }
                
                .btn-premium:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 10px 30px rgba(102,126,234,0.4);
                }
                
                /* Animated Elements */
                .animate-float {
                    animation: float 6s ease-in-out infinite;
                }
                
                .animate-float-delayed {
                    animation: float-delayed 7s ease-in-out infinite;
                }
                
                .animate-slide-up {
                    animation: slide-in-up 0.8s ease-out;
                }
                
                .animate-slide-left {
                    animation: slide-in-left 0.8s ease-out;
                }
                
                .animate-slide-right {
                    animation: slide-in-right 0.8s ease-out;
                }
                
                /* Custom Scrollbar */
                ::-webkit-scrollbar {
                    width: 8px;
                }
                
                ::-webkit-scrollbar-track {
                    background: rgba(255,255,255,0.1);
                    border-radius: 10px;
                }
                
                ::-webkit-scrollbar-thumb {
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    border-radius: 10px;
                }
                
                /* Nav Link Hover Effect */
                .nav-link {
                    position: relative;
                }
                
                .nav-link::after {
                    content: '';
                    position: absolute;
                    bottom: -4px;
                    left: 0;
                    width: 0;
                    height: 2px;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    transition: width 0.3s ease;
                }
                
                .nav-link:hover::after {
                    width: 100%;
                }
                
                /* Hero Pattern Overlay */
                .hero-pattern {
                    background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.05) 1px, transparent 1px);
                    background-size: 40px 40px;
                }
            </style>
        @endif
    </head>
    <body class="text-black flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col hero-pattern">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden animate-slide-up">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="nav-link inline-block px-6 py-2 text-black/80 hover:text-black border border-black/20 hover:border-black/40 rounded-full text-sm font-semibold transition-all duration-300 backdrop-blur-sm"
                        >
                            ✨ Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="nav-link inline-block px-6 py-2 text-black/80 hover:text-black border border-black/20 hover:border-black/40 rounded-full text-sm font-semibold transition-all duration-300 backdrop-blur-sm"
                        >
                            🔐 Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="btn-premium inline-block px-6 py-2 rounded-full text-sm font-semibold text-black shadow-lg transition-all duration-300"
                            >
                                🚀 Get Started
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row gap-6">
                <!-- Left Content Section -->
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-12 glass-premium rounded-3xl lg:rounded-l-3xl lg:rounded-r-none animate-slide-left">
                    <div class="mb-6">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-black/10 backdrop-blur-sm mb-4">
                            <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                            <span class="text-xs font-semibold tracking-wide">Active Development</span>
                        </div>
                        <h1 class="text-4xl lg:text-5xl font-bold mb-3 gradient-text-premium">
                            Build Amazing
                            <br>Applications
                        </h1>
                        <p class="text-black/70 text-base leading-relaxed mb-6">
                            Laravel is a web application framework with expressive, elegant syntax. 
                            We believe development must be an enjoyable and creative experience to be truly fulfilling.
                        </p>
                    </div>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3 text-black/80">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-sm">Ahmad fauzan isnata</span>
                        </div>
                        <div class="flex items-center gap-3 text-black/80">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm">20230140225</span>
                        </div>
                    </div>
                    
                    <ul class="flex flex-col mb-6 lg:mb-8 space-y-3">
                        <li class="flex items-center gap-3 text-black/60 text-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-gradient-to-r from-indigo-400 to-purple-400"></span>
                            <span>Modern PHP Framework</span>
                        </li>
                        <li class="flex items-center gap-3 text-black/60 text-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-gradient-to-r from-indigo-400 to-purple-400"></span>
                            <span>Elegant Syntax & Structure</span>
                        </li>
                        <li class="flex items-center gap-3 text-black/60 text-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-gradient-to-r from-indigo-400 to-purple-400"></span>
                            <span>Powerful Ecosystem</span>
                        </li>
                    </ul>
                    
                    <div class="flex flex-wrap gap-3">
                        <a href="https://laravel.com/docs" target="_blank" class="btn-premium inline-flex items-center gap-2 px-6 py-2.5 rounded-xl text-sm font-semibold text-black shadow-lg">
                            📚 Documentation
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="https://cloud.laravel.com" target="_blank" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-xl text-sm font-semibold text-black bg-black/10 backdrop-blur-sm hover:bg-black/20 transition-all duration-300 border border-black/20">
                            ☁️ Deploy now
                        </a>
                    </div>
                </div>
                
                <!-- Right Visual Section -->
                <div class="relative lg:-ml-px -mb-px lg:mb-0 rounded-t-3xl lg:rounded-t-none lg:rounded-r-3xl aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden animate-slide-right">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/20 to-purple-600/20 z-10"></div>
                    
                    {{-- Laravel Logo with Animation --}}
                    <svg class="w-full text-black/90 dark:text-black/90 transition-all translate-y-0 opacity-100 max-w-none duration-750 starting:opacity-0 starting:translate-y-6 relative z-20 animate-float" viewBox="0 0 438 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor" />
                        <path d="M110.256 41.6337C108.061 38.1275 104.945 35.3731 100.905 33.3681C96.8667 31.3647 92.8016 30.3618 88.7131 30.3618C83.4247 30.3618 78.5885 31.3389 74.201 33.2923C69.8111 35.2456 66.0474 37.928 62.9059 41.3333C59.7643 44.7401 57.3198 48.6726 55.5754 53.1293C53.8287 57.589 52.9572 62.274 52.9572 67.1813C52.9572 72.1925 53.8287 76.8995 55.5754 81.3069C57.3191 85.7173 59.7636 89.6241 62.9059 93.0293C66.0474 96.4361 69.8119 99.1155 74.201 101.069C78.5885 103.022 83.4247 103.999 88.7131 103.999C92.8016 103.999 96.8667 102.997 100.905 100.994C104.945 98.9911 108.061 96.2359 110.256 92.7282V102.195H126.563V32.1642H110.256V41.6337ZM108.76 75.7472C107.762 78.4531 106.366 80.8078 104.572 82.8112C102.776 84.8161 100.606 86.4183 98.0637 87.6206C95.5202 88.823 92.7004 89.4238 89.6103 89.4238C86.5178 89.4238 83.7252 88.823 81.2324 87.6206C78.7388 86.4183 76.5949 84.8161 74.7998 82.8112C73.004 80.8078 71.6319 78.4531 70.6856 75.7472C69.7356 73.0421 69.2644 70.1868 69.2644 67.1821C69.2644 64.1758 69.7356 61.3205 70.6856 58.6154C71.6319 55.9102 73.004 53.5571 74.7998 51.5522C76.5949 49.5495 78.738 47.9451 81.2324 46.7427C83.7252 45.5404 86.5178 44.9396 89.6103 44.9396C92.7012 44.9396 95.5202 45.5404 98.0637 46.7427C100.606 47.9451 102.776 49.5487 104.572 51.5522C106.367 53.5571 107.762 55.9102 108.76 58.6154C109.756 61.3205 110.256 64.1758 110.256 67.1821C110.256 70.1868 109.756 73.0421 108.76 75.7472Z" fill="currentColor" />
                        <path d="M242.805 41.6337C240.611 38.1275 237.494 35.3731 233.455 33.3681C229.416 31.3647 225.351 30.3618 221.262 30.3618C215.974 30.3618 211.138 31.3389 206.75 33.2923C202.36 35.2456 198.597 37.928 195.455 41.3333C192.314 44.7401 189.869 48.6726 188.125 53.1293C186.378 57.589 185.507 62.274 185.507 67.1813C185.507 72.1925 186.378 76.8995 188.125 81.3069C189.868 85.7173 192.313 89.6241 195.455 93.0293C198.597 96.4361 202.361 99.1155 206.75 101.069C211.138 103.022 215.974 103.999 221.262 103.999C225.351 103.999 229.416 102.997 233.455 100.994C237.494 98.9911 240.611 96.2359 242.805 92.7282V102.195H259.112V32.1642H242.805V41.6337ZM241.31 75.7472C240.312 78.4531 238.916 80.8078 237.122 82.8112C235.326 84.8161 233.156 86.4183 230.614 87.6206C228.07 88.823 225.251 89.4238 222.16 89.4238C219.068 89.4238 216.275 88.823 213.782 87.6206C211.289 86.4183 209.145 84.8161 207.35 82.8112C205.554 80.8078 204.182 78.4531 203.236 75.7472C202.286 73.0421 201.814 70.1868 201.814 67.1821C201.814 64.1758 202.286 61.3205 203.236 58.6154C204.182 55.9102 205.554 53.5571 207.35 51.5522C209.145 49.5495 211.288 47.9451 213.782 46.7427C216.275 45.5404 219.068 44.9396 222.16 44.9396C225.251 44.9396 228.07 45.5404 230.614 46.7427C233.156 47.9451 235.326 49.5487 237.122 51.5522C238.917 53.5571 240.312 55.9102 241.31 58.6154C242.306 61.3205 242.806 64.1758 242.806 67.1821C242.805 70.1868 242.305 73.0421 241.31 75.7472Z" fill="currentColor" />
                        <path d="M438 -3H421.694V102.197H438V-3Z" fill="currentColor" />
                        <path d="M139.43 102.197H155.735V48.2834H183.712V32.1665H139.43V102.197Z" fill="currentColor" />
                        <path d="M324.49 32.1665L303.995 85.794L283.498 32.1665H266.983L293.748 102.197H314.242L341.006 32.1665H324.49Z" fill="currentColor" />
                        <path d="M376.571 30.3656C356.603 30.3656 340.797 46.8497 340.797 67.1828C340.797 89.6597 356.094 104 378.661 104C391.29 104 399.354 99.1488 409.206 88.5848L398.189 80.0226C398.183 80.031 389.874 90.9895 377.468 90.9895C363.048 90.9895 356.977 79.3111 356.977 73.269H411.075C413.917 50.1328 398.775 30.3656 376.571 30.3656ZM357.02 61.0967C357.145 59.7487 359.023 43.3761 376.442 43.3761C393.861 43.3761 395.978 59.7464 396.099 61.0967H357.02Z" fill="currentColor" />
                    </svg>

                    {{-- Decorative Elements --}}
                    <div class="absolute top-10 right-10 w-32 h-32 rounded-full bg-gradient-to-br from-indigo-500/20 to-purple-500/20 blur-3xl animate-float"></div>
                    <div class="absolute bottom-10 left-10 w-40 h-40 rounded-full bg-gradient-to-br from-pink-500/20 to-orange-500/20 blur-3xl animate-float-delayed"></div>
                    
                    <div class="absolute inset-0 rounded-t-3xl lg:rounded-t-none lg:rounded-r-3xl shadow-[inset_0px_0px_0px_1px_rgba(255,255,255,0.1)]"></div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>