@props([
    'name',
    'value' => '1',
    'label' => null,
    'id' => null,
])

@php
    $checkboxId = $id ?? $name;
@endphp

<div class="flex items-start">
    <div class="flex items-center h-5">
        <input type="checkbox"
               id="{{ $checkboxId }}"
               name="{{ $name }}"
               value="{{ $value }}"
               {{ old($name) ? 'checked' : '' }}
               {{ $attributes->merge([
                   'class' => 'w-4 h-4 text-blue-800 border-slate-300 rounded focus:ring-blue-800',
               ]) }}>
    </div>
    @if($label)
        <label for="{{ $checkboxId }}" class="ml-2 block text-sm text-slate-700">
            {{ $label }}
        </label>
    @endif
</div>

@error($name)
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
