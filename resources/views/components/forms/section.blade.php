@props([
    'icon' => null,
    'title' => null,
])

<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6 sm:p-8">
    @if($title && $icon)
        <h2 class="text-lg font-bold text-slate-900 mb-6 flex items-center gap-2">
            <i data-lucide="{{ $icon }}" class="w-5 h-5 text-blue-800"></i>
            {{ $title }}
        </h2>
    @endif

    {{ $slot }}
</div>
