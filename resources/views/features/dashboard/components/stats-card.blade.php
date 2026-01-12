@props([
    'title',
    'value',
    'trend' => null,
    'trendType' => 'up', // up | down | neutral
    'icon',
    'footer' => null
])

@php
    $trendClasses = match ($trendType) {
        'up' => 'text-emerald-700 bg-emerald-50',
        'down' => 'text-rose-700 bg-rose-50',
        default => 'text-slate-600 bg-slate-100',
    };
@endphp

<div {{ $attributes->merge([
    'class' => 'bg-white rounded-2xl border border-slate-200 shadow-sm
               p-7 flex flex-col justify-between min-h-[130px]'
]) }}>
    {{-- Header --}}
    <div class="flex items-start justify-between">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-700
                        flex items-center justify-center">
                {{ $icon }}
            </div>

            <div>
                <p class="text-sm font-medium text-slate-500 tracking-wide">
                    {{ $title }}
                </p>
                <p class="text-3xl font-semibold text-slate-900 mt-1">
                    {{ $value }}
                </p>
            </div>
        </div>

        @if ($trend)
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full {{ $trendClasses }}">
                {{ $trend }}
            </span>
        @endif
    </div>

    {{-- Footer --}}
    <div class="mt-2 text-xs text-slate-400">
        <p>
            {{ $footer }}
        </p>
    </div>
</div>
