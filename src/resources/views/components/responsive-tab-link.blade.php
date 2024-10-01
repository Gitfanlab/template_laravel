@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'flex flex-col items-center gap-1 text-primary'
            : 'flex flex-col items-center gap-1 text-gray-400 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
