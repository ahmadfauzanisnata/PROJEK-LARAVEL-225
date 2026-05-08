<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center">
        <!-- Confirm Password Card -->
        <div class="relative w-full max-w-md mx-4 animate-slide-in-up">
            <div class="bg-white/10 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 overflow-hidden">
                <!-- Header Decoration -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-500 via-orange-500 to-red-500"></div>
                
                <!-- Icon Section -->
                <div class="text-center pt-8 pb-4">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 shadow-lg mb-4 relative">
                        <!-- Animated ring -->
                        <div class="absolute inset-0 rounded-2xl border-2 border-amber-400/30 animate-ping"></div>
                        <div class="absolute inset-0 rounded-2xl border-2 border-amber-400/50 animate-pulse"></div>
                        <svg class="w-10 h-10 text-white relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold text-white mb-1">Confirm Password</h1>
                    <p class="text-sm text-white/60">Verify your identity to continue</p>
                </div>

                <!-- Security Notice -->
                <div class="mx-8 mb-6 p-4 rounded-xl bg-amber-500/10 border border-amber-500/20">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-amber-200 leading-relaxed">
                                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                            </p>
                        </div>
                    </div>
                </div>

                <form method="POST" action="{{ route('password.confirm') }}" class="px-8 pb-8 space-y-6">
                    @csrf

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <x-input-label for="password" :value="__('Your Password')" class="text-sm font-semibold text-white/80 block" />
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-white/40 group-focus-within:text-amber-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <x-text-input 
                                id="password" 
                                class="pl-10 block w-full rounded-xl border-2 border-white/20 bg-white/5 text-white placeholder-white/40 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20 transition-all duration-300"
                                type="password"
                                name="password"
                                required 
                                autocomplete="current-password"
                                placeholder="Enter your password"
                            />
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" class="toggle-password text-white/40 hover:text-white/60 transition">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-300" />
                    </div>

                    <!-- Security Tips -->
                    <div class="p-3 rounded-lg bg-white/5 border border-white/10">
                        <div class="flex items-center gap-2 text-xs text-white/60">
                            <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span class="font-semibold">Security Tip:</span>
                            <span>Your password is encrypted and never stored in plain text</span>
                        </div>
                    </div>

                    <!-- Confirm Button -->
                    <div class="flex items-center justify-end pt-2">
                        <button type="submit" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-white text-sm font-semibold rounded-xl shadow-lg shadow-amber-500/30 hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            {{ __('Confirm & Continue') }}
                        </button>
                    </div>
                </form>
            </div>

            <!-- Footer Note -->
            <p class="text-center text-white/40 text-xs mt-6">
                Secure verification • Protected by encryption
            </p>
        </div>
    </div>

    <!-- Password Toggle Script -->
    <script>
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.closest('.relative').querySelector('input');
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                const svg = this.querySelector('svg');
                if (type === 'text') {
                    svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>';
                } else {
                    svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>';
                }
            });
        });
    </script>

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
        
        /* Custom ping animation */
        @keyframes ping {
            75%, 100% {
                transform: scale(1.2);
                opacity: 0;
            }
        }
        
        .animate-ping {
            animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;
        }
    </style>
</x-guest-layout>