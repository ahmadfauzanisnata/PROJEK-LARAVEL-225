<section class="animate-slide-in-up">
    <div class="relative">
        <!-- Decorative elements -->
        <div class="absolute -top-3 -right-3 w-24 h-24 bg-gradient-to-br from-amber-400/20 to-orange-400/20 rounded-full blur-2xl"></div>
        
        <header class="relative mb-8">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold bg-gradient-to-r from-amber-600 to-orange-600 dark:from-amber-400 dark:to-orange-400 bg-clip-text text-transparent">
                        {{ __('Update Password') }}
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-0.5">
                        {{ __('Ensure your account is using a long, random password to stay secure.') }}
                    </p>
                </div>
            </div>
        </header>

        <form method="post" action="{{ route('password.update') }}" class="mt-8 space-y-6">
            @csrf
            @method('put')

            <!-- Password Strength Indicator -->
            <div class="mb-4 p-3 rounded-lg bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800">
                <div class="flex items-center gap-2 text-xs text-blue-700 dark:text-blue-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span class="font-semibold">Password Tips:</span>
                    <span>Use at least 8 characters with mix of letters, numbers & symbols</span>
                </div>
            </div>

            <!-- Current Password Field -->
            <div class="group">
                <x-input-label for="update_password_current_password" :value="__('Current Password')" class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 block" />
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400 group-focus-within:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <x-text-input 
                        id="update_password_current_password" 
                        name="current_password" 
                        type="password" 
                        class="pl-10 block w-full rounded-xl border-2 border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/50 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20 transition-all duration-300" 
                        autocomplete="current-password" 
                        placeholder="Enter your current password"
                    />
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <button type="button" class="toggle-password text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
            </div>

            <!-- New Password Field -->
            <div class="group">
                <x-input-label for="update_password_password" :value="__('New Password')" class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 block" />
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400 group-focus-within:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <x-text-input 
                        id="update_password_password" 
                        name="password" 
                        type="password" 
                        class="pl-10 block w-full rounded-xl border-2 border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/50 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20 transition-all duration-300" 
                        autocomplete="new-password" 
                        placeholder="Enter new password"
                    />
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <button type="button" class="toggle-password text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Password Strength Meter -->
                <div class="mt-2">
                    <div class="flex gap-1 h-1.5">
                        <div class="flex-1 rounded-full bg-gray-200 dark:bg-gray-700 password-strength-bar" data-strength="0"></div>
                        <div class="flex-1 rounded-full bg-gray-200 dark:bg-gray-700 password-strength-bar" data-strength="1"></div>
                        <div class="flex-1 rounded-full bg-gray-200 dark:bg-gray-700 password-strength-bar" data-strength="2"></div>
                        <div class="flex-1 rounded-full bg-gray-200 dark:bg-gray-700 password-strength-bar" data-strength="3"></div>
                    </div>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 password-strength-text">Password strength: <span class="font-semibold">Not set</span></p>
                </div>
                
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
            </div>

            <!-- Confirm Password Field -->
            <div class="group">
                <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 block" />
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400 group-focus-within:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <x-text-input 
                        id="update_password_password_confirmation" 
                        name="password_confirmation" 
                        type="password" 
                        class="pl-10 block w-full rounded-xl border-2 border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/50 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20 transition-all duration-300" 
                        autocomplete="new-password" 
                        placeholder="Confirm your new password"
                    />
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <button type="button" class="toggle-password text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-4 pt-4">
                <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-black text-sm font-semibold rounded-xl shadow-lg shadow-amber-500/30 hover:shadow-xl transition-all duration-300 hover:scale-105">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                    {{ __('Update Password') }}
                </button>

                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/20 px-4 py-2 rounded-lg inline-flex items-center gap-2"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ __('Password updated successfully!') }}
                    </p>
                @endif
            </div>
        </form>
    </div>

    <!-- Password Toggle & Strength Meter Script -->
    <script>
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.closest('.relative').querySelector('input');
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                // Toggle icon (optional: change eye icon style)
                const svg = this.querySelector('svg');
                if (type === 'text') {
                    svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>';
                } else {
                    svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>';
                }
            });
        });

        // Password strength meter
        const passwordInput = document.getElementById('update_password_password');
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
                    bar.classList.remove('bg-gray-200', 'dark:bg-gray-700');
                } else {
                    bar.classList.remove('bg-red-500', 'bg-orange-500', 'bg-yellow-500', 'bg-green-500');
                    bar.classList.add('bg-gray-200', 'dark:bg-gray-700');
                }
            });
            
            const strengthText = ['Very Weak', 'Weak', 'Medium', 'Strong', 'Very Strong'];
            textSpan.textContent = strengthText[strength] || 'Not set';
            textSpan.className = strength === 4 ? 'text-green-600 dark:text-green-400' : 
                                 strength === 3 ? 'text-yellow-600 dark:text-yellow-400' :
                                 strength === 2 ? 'text-orange-600 dark:text-orange-400' :
                                 strength === 1 ? 'text-red-600 dark:text-red-400' : '';
        }
    </script>

    <style>
        @keyframes slide-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-slide-in-up {
            animation: slide-in-up 0.5s ease-out forwards;
        }
    </style>
</section>