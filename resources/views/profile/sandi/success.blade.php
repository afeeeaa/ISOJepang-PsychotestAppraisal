<x-app-layout>
    <head>
        <title>Kata Sandi Diperbarui</title>
        {{-- <title>{{ isset($webTitle) ? $webTitle . ' - ' : '' }}Profil</title> --}}
        <link rel="icon" type="image/png" href="{{ asset('path/to/your/favicon.png') }}">
    </head>    
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Ubah Kata Sandi') }}
        </h2>
    </x-slot>

    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg dark:bg-gray-800">
        <div class="max-w-xl">
            <p>{{ __('Kata sandi Anda telah berhasil diperbarui.') }}</p>
        </div>
    </div>
</x-app-layout>
