@props([
    'name',
    'value' => null,
    'placeholder' => null,
    'required' => false,
    'type' => 'text',
    'id' => null,
])

@php
    $inputId = $id ?? $name;
@endphp

<input {{ $attributes->merge([
    'type' => $type,
    'id' => $inputId,
    'name' => $name,
    'value' => old($name, $value),
    'required' => $required,
    'placeholder' => $placeholder,
    'class' => 'w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition',
]) }}>

@error($name)
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
