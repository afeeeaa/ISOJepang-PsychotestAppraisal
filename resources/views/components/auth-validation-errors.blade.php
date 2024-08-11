@props(['errors'])

@if ($errors->any())
<div {{ $attributes->merge(['class' => 'bg-red-100 text-red-700 px-4 py-3 rounded relative']) }}>
    <div class="font-bold">
        {{ __('Terdapat Kesalahan') }}
    </div>
    <ul class="mt-3 list-disc list-inside text-sm">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
