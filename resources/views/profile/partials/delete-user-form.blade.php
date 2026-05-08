<section class="space-y-6 animate-slide-in-up">
    <div class="relative">
        <!-- Decorative elements -->
        <div class="absolute -bottom-3 -left-3 w-24 h-24 bg-gradient-to-br from-red-400/20 to-pink-400/20 rounded-full blur-2xl"></div>
        
        <header class="relative mb-6">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-red-500 to-pink-600 flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold bg-gradient-to-r from-red-600 to-pink-600 dark:from-red-400 dark:to-pink-400 bg-clip-text text-transparent">
                        {{ __('Delete Account') }}
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-0.5">
                        {{ __('Permanently delete your account and all associated data') }}
                    </p>
                </div>
            </div>
        </header>

        <!-- Warning Card -->
        <div class="mb-6 p-4 rounded-xl bg-gradient-to-r from-red-50 to-pink-50 dark:from-red-950/30 dark:to-pink-950/30 border-l-4 border-red-500">
            <div class="flex items-start gap-3">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-red-800 dark:text-red-300 font-medium">
                        {{ __('Warning: This action cannot be undone!') }}
                    </p>
                    <p class="text-xs text-red-700 dark:text-red-400 mt-1">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Delete Button -->
        <x-danger-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            class="inline-flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 text-black text-sm font-semibold rounded-xl shadow-lg shadow-red-500/30 hover:shadow-xl transition-all duration-300 hover:scale-105 border-0"
        >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
            </svg>
            {{ __('Delete Account') }}
        </x-danger-button>

        <!-- Modal -->
        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
            <div class="relative">
                <!-- Modal Decorative Header -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-red-500 via-pink-500 to-rose-500 rounded-t-2xl"></div>
                
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6 sm:p-8">
                    @csrf
                    @method('delete')

                    <!-- Modal Icon -->
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-red-100 to-pink-100 dark:from-red-900/30 dark:to-pink-900/30 flex items-center justify-center shadow-inner">
                            <svg class="w-8 h-8 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                    </div>

                    <h2 class="text-xl font-bold text-center text-gray-900 dark:text-gray-100 mb-2">
                        {{ __('Are you absolutely sure?') }}
                    </h2>

                    <p class="text-sm text-center text-gray-600 dark:text-gray-400 mb-6">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <!-- Password Field -->
                    <div class="mb-6">
                        <x-input-label for="password" value="{{ __('Password') }}" class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 block" />
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-red-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <x-text-input
                                id="password"
                                name="password"
                                type="password"
                                class="pl-10 block w-full rounded-xl border-2 border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/50 focus:border-red-500 focus:ring-4 focus:ring-red-500/20 transition-all duration-300"
                                placeholder="{{ __('Enter your password to confirm') }}"
                            />
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" class="modal-toggle-password text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
                    </div>

                    <!-- Modal Actions -->
                    <div class="flex flex-col sm:flex-row justify-end gap-3">
                        <x-secondary-button 
                            x-on:click="$dispatch('close')" 
                            class="inline-flex items-center justify-center gap-2 px-6 py-2.5 rounded-xl border-2 border-gray-200 dark:border-gray-700 text-sm font-semibold text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-300"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            {{ __('Cancel') }}
                        </x-secondary-button>

                        <x-danger-button 
                            class="inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 text-black text-sm font-semibold rounded-xl shadow-lg shadow-red-500/30 hover:shadow-xl transition-all duration-300 hover:scale-105 border-0"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            {{ __('Permanently Delete') }}
                        </x-danger-button>
                    </div>
                </form>
            </div>
        </x-modal>
    </div>

    <!-- Modal Password Toggle Script -->
    <script>
        // Toggle password visibility in modal
        document.querySelectorAll('.modal-toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.closest('.relative').querySelector('input');
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                // Toggle icon
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