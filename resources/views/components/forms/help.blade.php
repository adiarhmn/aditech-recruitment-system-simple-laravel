@props([
    'color' => 'slate',
])

@php
    $colors = [
        'slate' => 'text-slate-400',
        'blue' => 'text-blue-400',
    ];

    $colorClass = $colors[$color] ?? $colors['slate'];
@endphp

<p class="mt-2 text-xs {{ $colorClass }}">
    {{ $slot }}
</p>
