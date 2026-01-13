@props([
    'for' => null,
    'value' => null,
    'required' => false,
])

@php
    $labelText = $slot;
    $isRequired = $required;
@endphp

<label {{ $attributes->merge(['for' => $for]) }} class="block text-sm font-medium text-slate-700 mb-2">
    {{ $labelText }}
    @if($isRequired) <span class="text-red-500">*</span> @endif
</label>
