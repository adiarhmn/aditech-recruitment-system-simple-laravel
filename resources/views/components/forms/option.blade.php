@props([
    'value' => null,
])

@php
    $isSelected = old($attributes->get('name')) === $value;
@endphp

<li {{ $attributes->merge([
    'data-value' => $value,
    'role' => 'option',
    'class' => 'px-4 py-3 hover:bg-slate-50 cursor-pointer transition ' . ($isSelected ? 'bg-blue-50 text-blue-800' : 'text-slate-700'),
]) }}>
    {{ $slot }}
</li>
