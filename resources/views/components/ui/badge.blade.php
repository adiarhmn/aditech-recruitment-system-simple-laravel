@props(['color' => 'blue', 'label'])

@php
    $colors = [
        'blue' => 'bg-blue-50 text-blue-700 border-blue-100',
        'green' => 'bg-green-50 text-green-700 border-green-100',
        'red' => 'bg-red-50 text-red-700 border-red-100',
        'yellow' => 'bg-yellow-50 text-yellow-700 border-yellow-100',
        'gray' => 'bg-slate-50 text-slate-700 border-slate-100',
    ];
    
    $classes = $colors[$color] ?? $colors['blue'];
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium border $classes"]) }}>
    {{ $label ?? $slot }}
</span>
