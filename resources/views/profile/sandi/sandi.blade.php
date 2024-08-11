<x-app-layout>
    <head>
        <title>{{ isset($webTitle) ? $webTitle . ' - ' : '' }}Ubah Kata Sandi</title>
        <link rel="icon" type="image/png" href="{{ asset('path/to/your/favicon.png') }}">
    </head>    
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Ubah Kata Sandi') }}
        </h2>
    </x-slot>

    <div class="space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg dark:bg-gray-800">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>
    </div>
</x-app-layout>
