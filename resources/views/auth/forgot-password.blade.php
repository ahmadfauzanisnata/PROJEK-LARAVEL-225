<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-sky-900 via-blue-900 to-indigo-900 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-sky-500/30 to-blue-500/30 rounded-full blur-3xl animate-float"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-indigo-500/30 to-purple-500/30 rounded-full blur-3xl animate-float-delayed"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-full blur-3xl"></div>
        </div>

        <!-- Forgot Password Card -->
        <div class="relative w-full max-w-md mx-4 animate-slide-in-up">
            <div class="bg-black/10 backdrop-blur-xl rounded-3xl shadow-2xl border border-black/20 overflow-hidden">
                <!-- Header Decoration -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-sky-500 via-blue-500 to-indigo-500"></div>
                
                <!-- Logo/Brand Section -->
                <div class="text-center pt-8 pb-6">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-sky-500 to-blue-600 shadow-lg mb-4">
                        <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM9 12.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM21 7.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM21 17.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM15 17.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z"></path>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold text-black mb-1">Reset Password</h1>
                    <p class="text-sm text-black/60">We'll send you a recovery link</p>
                </div>

                <!-- Info Text -->
                <div class="mx-8 mb-6 p-4 rounded-xl bg-black/20 border border-black/30">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-black/70 leading-relaxed">
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4 mx-8" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}" class="px-8 pb-8 space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div class="space-y-2">
                        <x-input-label for="email" :value="__('Email Address')" class="text-sm font-semibold text-black/80 block" />
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-black/40 group-focus-within:text-sky-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <x-text-input 
                                id="email" 
                                class="pl-10 block w-full rounded-xl border-2 border-black/20 bg-black/5 text-black placeholder-black/40 focus:border-sky-500 focus:ring-4 focus:ring-sky-500/20 transition-all duration-300" 
                                type="email" 
                                name="email" 
                                :value="old('email')" 
                                required 
                                autofocus 
                                placeholder="you@example.com"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-300" />
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col space-y-3 pt-2">
                        <button type="submit" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-sky-600 to-blue-600 hover:from-sky-700 hover:to-blue-700 text-black text-sm font-semibold rounded-xl shadow-lg shadow-sky-500/30 hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            {{ __('Send Reset Link') }}
                        </button>

                        <!-- Back to Login Link -->
                        <div class="text-center pt-2">
                            <a href="{{ route('login') }}" class="inline-flex items-center gap-1 text-sm text-black/60 hover:text-black/90 transition group">
                                <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Back to Login
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Footer Note -->
            <p class="text-center text-black/40 text-xs mt-6">
                Secure password recovery • Check your spam folder
            </p>
        </div>
    </div>

    <style>
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
        
        .animate-float {
            animation: float 8s ease-in-out infinite;
        }
        
        .animate-float-delayed {
            animation: float-delayed 10s ease-in-out infinite;
        }
        
        .animate-slide-in-up {
            animation: slide-in-up 0.6s ease-out forwards;
            opacity: 0;
        }
    </style>
</x-guest-layout>