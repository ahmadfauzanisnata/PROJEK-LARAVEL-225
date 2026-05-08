<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-emerald-900 via-teal-900 to-cyan-900 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-emerald-500/30 to-teal-500/30 rounded-full blur-3xl animate-float"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-cyan-500/30 to-blue-500/30 rounded-full blur-3xl animate-float-delayed"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-full blur-3xl"></div>
        </div>

        <!-- Register Card -->
        <div class="relative w-full max-w-md mx-4 animate-slide-in-up">
            <div class="bg-wblack/10 backdrop-blur-xl rounded-3xl shadow-2xl border border-black/20 overflow-hidden">
                <!-- Header Decoration -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-500"></div>
                
                <!-- Logo/Brand Section -->
                <div class="text-center pt-8 pb-6">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 shadow-lg mb-4">
                        <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold text-black mb-1">Create Account</h1>
                    <p class="text-sm text-black/60">Join us and start your journey</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="px-8 pb-8 space-y-6">
                    @csrf

                    <!-- Name -->
                    <div class="space-y-2">
                        <x-input-label for="name" :value="__('Full Name')" class="text-sm font-semibold text-black/80 block" />
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-black/40 group-focus-within:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <x-text-input 
                                id="name" 
                                class="pl-10 block w-full rounded-xl border-2 border-black/20 bg-black/5 text-black placeholder-black/40 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/20 transition-all duration-300" 
                                type="text" 
                                name="name" 
                                :value="old('name')" 
                                required 
                                autofocus 
                                autocomplete="name" 
                                placeholder="John Doe"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-300" />
                    </div>

                    <!-- Email Address -->
                    <div class="space-y-2">
                        <x-input-label for="email" :value="__('Email Address')" class="text-sm font-semibold text-black/80 block" />
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-black/40 group-focus-within:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <x-text-input 
                                id="email" 
                                class="pl-10 block w-full rounded-xl border-2 border-black/20 bg-black/5 text-black placeholder-black/40 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/20 transition-all duration-300" 
                                type="email" 
                                name="email" 
                                :value="old('email')" 
                                required 
                                autocomplete="username" 
                                placeholder="you@example.com"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-300" />
                    </div>

                    <!-- Password -->
                    <div class="space-y-2">
                        <x-input-label for="password" :value="__('Password')" class="text-sm font-semibold text-black/80 block" />
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-black/40 group-focus-within:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <x-text-input 
                                id="password" 
                                class="pl-10 block w-full rounded-xl border-2 border-black/20 bg-black/5 text-black placeholder-black/40 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/20 transition-all duration-300"
                                type="password"
                                name="password"
                                required 
                                autocomplete="new-password"
                                placeholder="Create a strong password"
                            />
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" class="toggle-password text-black/40 hover:text-black/60 transition">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Password Strength Meter -->
                        <div class="mt-2">
                            <div class="flex gap-1 h-1.5 mb-1">
                                <div class="flex-1 rounded-full bg-black/20 password-strength-bar" data-strength="0"></div>
                                <div class="flex-1 rounded-full bg-black/20 password-strength-bar" data-strength="1"></div>
                                <div class="flex-1 rounded-full bg-black/20 password-strength-bar" data-strength="2"></div>
                                <div class="flex-1 rounded-full bg-black/20 password-strength-bar" data-strength="3"></div>
                            </div>
                            <p class="text-xs text-black/50 password-strength-text">Password strength: <span class="font-semibold">Not set</span></p>
                        </div>
                        
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-300" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="space-y-2">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-sm font-semibold text-black/80 block" />
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-black/40 group-focus-within:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <x-text-input 
                                id="password_confirmation" 
                                class="pl-10 block w-full rounded-xl border-2 border-black/20 bg-black/5 text-black placeholder-black/40 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/20 transition-all duration-300"
                                type="password"
                                name="password_confirmation" 
                                required 
                                autocomplete="new-password"
                                placeholder="Confirm your password"
                            />
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" class="toggle-password-confirm text-black/40 hover:text-black/60 transition">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-300" />
                    </div>

                    <!-- Password Tips -->
                    <div class="p-3 rounded-lg bg-black/5 border border-black/10">
                        <div class="flex items-center gap-2 text-xs text-black/60">
                            <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="font-semibold">Password requirements:</span>
                            <span>8+ chars, uppercase, number & symbol</span>
                        </div>
                    </div>

                    <!-- Register Button & Login Link -->
                    <div class="flex items-center justify-between pt-2">
                        <a class="text-sm text-emerald-300 hover:text-emerald-200 transition font-medium" href="{{ route('login') }}">
                            ← Already registered?
                        </a>

                        <button type="submit" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-black text-sm font-semibold rounded-xl shadow-lg shadow-emerald-500/30 hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                            </svg>
                            {{ __('Create Account') }}
                        </button>
                    </div>
                </form>
            </div>

            <!-- Footer Note -->
            <p class="text-center text-black/40 text-xs mt-6">
                By signing up, you agree to our Terms of Service and Privacy Policy
            </p>
        </div>
    </div>

    <!-- Password Toggle & Strength Meter Script -->
    <script>
        // Toggle password visibility for password field
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

        // Toggle password visibility for confirm password field
        document.querySelectorAll('.toggle-password-confirm').forEach(button => {
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

        // Password strength meter
        const passwordInput = document.getElementById('password');
        if (passwordInput) {
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                const strength = calculatePasswordStrength(password);
                updateStrengthMeter(strength);
            });
        }

        function calculatePasswordStrength(password) {
            let strength = 0;
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/\d/)) strength++;
            if (password.match(/[^a-zA-Z\d]/)) strength++;
            return strength;
        }

        function updateStrengthMeter(strength) {
            const bars = document.querySelectorAll('.password-strength-bar');
            const textSpan = document.querySelector('.password-strength-text span');
            
            bars.forEach((bar, index) => {
                if (index < strength) {
                    if (strength === 1) bar.classList.add('bg-red-500');
                    else if (strength === 2) bar.classList.add('bg-orange-500');
                    else if (strength === 3) bar.classList.add('bg-yellow-500');
                    else if (strength === 4) bar.classList.add('bg-green-500');
                    bar.classList.remove('bg-black/20');
                } else {
                    bar.classList.remove('bg-red-500', 'bg-orange-500', 'bg-yellow-500', 'bg-green-500');
                    bar.classList.add('bg-black/20');
                }
            });
            
            const strengthText = ['Very Weak', 'Weak', 'Medium', 'Strong', 'Very Strong'];
            const textElement = document.querySelector('.password-strength-text span');
            if (textElement) {
                textElement.textContent = strengthText[strength] || 'Not set';
                textElement.className = strength === 4 ? 'text-green-400' : 
                                       strength === 3 ? 'text-yellow-400' :
                                       strength === 2 ? 'text-orange-400' :
                                       strength === 1 ? 'text-red-400' : 'text-black/50';
            }
        }
    </script>

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