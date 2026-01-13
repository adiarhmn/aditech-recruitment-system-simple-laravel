@props([
    'type' => 'submit',
    'variant' => 'primary',
    'size' => 'md',
])

@php
    $variants = [
        'primary' => 'bg-blue-800 hover:bg-blue-900 text-white',
        'secondary' => 'bg-white border border-slate-300 text-slate-700 hover:bg-slate-50',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white',
    ];

    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-6 py-3 text-base font-medium',
        'lg' => 'px-8 py-4 text-lg font-bold',
    ];

    $baseClasses = 'inline-flex items-center justify-center rounded-lg shadow-sm transition font-medium';
    $variantClass = $variants[$variant] ?? $variants['primary'];
    $sizeClass = $sizes[$size] ?? $sizes['md'];
@endphp

<button type="{{ $type }}" {{ $attributes->merge([
    'class' => $baseClasses . ' ' . $variantClass . ' ' . $sizeClass,
]) }}>
    {{ $slot }}
</button>
