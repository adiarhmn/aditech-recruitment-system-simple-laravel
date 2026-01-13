@props([
    'type' => 'success',
    'message' => null,
])

@php
    $types = [
        'success' => [
            'bg' => 'bg-green-50',
            'border' => 'border-green-200',
            'text' => 'text-green-800',
            'icon' => 'text-green-600',
            'iconPath' => 'M5 13l4 4L19 7',
        ],
        'error' => [
            'bg' => 'bg-red-50',
            'border' => 'border-red-200',
            'text' => 'text-red-800',
            'icon' => 'text-red-600',
            'iconPath' => 'M6 18L18 6M6 6l12 12',
        ],
        'warning' => [
            'bg' => 'bg-yellow-50',
            'border' => 'border-yellow-200',
            'text' => 'text-yellow-800',
            'icon' => 'text-yellow-600',
            'iconPath' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z',
        ],
        'info' => [
            'bg' => 'bg-blue-50',
            'border' => 'border-blue-200',
            'text' => 'text-blue-800',
            'icon' => 'text-blue-600',
            'iconPath' => 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
        ],
    ];

    $config = $types[$type] ?? $types['success'];
@endphp

<div class="{{ $config['bg'] }} border {{ $config['border'] }} rounded-lg p-4 flex items-center gap-3 mb-6">
    <svg class="w-5 h-5 {{ $config['icon'] }} flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $config['iconPath'] }}"></path>
    </svg>
    <p class="text-sm font-medium {{ $config['text'] }}">
        {{ $message ?? $slot }}
    </p>
</div>
