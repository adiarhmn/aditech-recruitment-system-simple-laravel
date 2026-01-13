@props([
    'name',
    'value' => null,
    'placeholder' => null,
    'required' => false,
    'min' => null,
    'max' => null,
    'step' => '1',
    'id' => null,
])

@php
    $inputId = $id ?? $name;
@endphp

<input {{ $attributes->merge([
    'type' => 'number',
    'id' => $inputId,
    'name' => $name,
    'value' => old($name, $value),
    'required' => $required,
    'placeholder' => $placeholder,
    'min' => $min,
    'max' => $max,
    'step' => $step,
    'class' => 'w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition',
]) }}>

@error($name)
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
