@props([
    'name',
    'value' => null,
    'placeholder' => null,
    'required' => false,
    'rows' => '4',
    'id' => null,
])

@php
    $textareaId = $id ?? $name;
@endphp

<textarea {{ $attributes->merge([
    'id' => $textareaId,
    'name' => $name,
    'required' => $required,
    'rows' => $rows,
    'placeholder' => $placeholder,
    'class' => 'w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition resize-none',
]) }}>{{ old($name, $value) }}</textarea>

@error($name)
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
