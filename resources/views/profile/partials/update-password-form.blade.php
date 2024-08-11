<section>
    <header>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    
    <form method="post" action="{{ route('profile.updatePassword') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="space-y-2">
            <x-form.label for="current_password" :value="__('Kata Sandi Lama')" />
            <x-form.input id="current_password" name="current_password" type="password" class="block w-full" autocomplete="current-password" style="width:200%;" />
            @error('current_password')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="space-y-2">
            <x-form.label for="password" :value="__('Kata Sandi Baru')" />
            <x-form.input id="password" name="password" type="password" class="block w-full" autocomplete="new-password" style="width:200%;" />
            @error('password')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="space-y-2">
            <x-form.label for="password_confirmation" :value="__('Konfirmasi Kata Sandi Baru')" />
            <x-form.input id="password_confirmation" name="password_confirmation" type="password" class="block w-full" autocomplete="new-password" style="width:200%;" />
            @error('password_confirmation')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <x-button>{{ __('Simpan') }}</x-button>
            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Berhasil disimpan') }}
                </p>
            @endif
        </div>
    </form>
</section>
