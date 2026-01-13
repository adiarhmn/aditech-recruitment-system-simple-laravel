@props([
    'name',
    'value' => null,
    'required' => false,
    'placeholder' => 'Select an option',
    'id' => null,
])

@php
    $selectId = $id ?? $name;
    $currentValue = old($name, $value);
@endphp

<div class="relative custom-select" data-select-id="{{ $selectId }}" data-name="{{ $name }}">
    <input type="hidden" id="{{ $selectId }}" name="{{ $name }}" value="{{ $currentValue }}" {{ $required ? 'required' : '' }}>

    <button type="button"
            class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition flex items-center justify-between cursor-pointer hover:bg-slate-100"
            aria-haspopup="listbox"
            aria-expanded="false"
            data-select-button>
        <span class="text-slate-500 select-label">{{ $placeholder }}</span>
        <svg class="w-5 h-5 text-slate-400 transition-transform duration-200 select-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    <ul class="absolute z-50 w-full mt-1 bg-white border border-slate-200 rounded-lg shadow-lg max-h-60 overflow-y-auto hidden select-options"
        role="listbox"
        tabindex="-1">
        @if($placeholder !== '')
        <li class="px-4 py-3 text-slate-500 hover:bg-slate-50 cursor-pointer transition"
            data-value=""
            role="option">
            {{ $placeholder }}
        </li>
        @endif

        {{ $slot }}
    </ul>

    @error($name)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

@pushOnce('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const customSelects = document.querySelectorAll('.custom-select');

    customSelects.forEach(select => {
        const button = select.querySelector('[data-select-button]');
        const optionsList = select.querySelector('.select-options');
        const label = select.querySelector('.select-label');
        const arrow = select.querySelector('.select-arrow');
        const hiddenInput = select.querySelector('input[type="hidden"]');
        const options = optionsList.querySelectorAll('[data-value]');
        const selectName = select.dataset.name;

        button.addEventListener('click', (e) => {
            e.stopPropagation();
            const isOpen = !optionsList.classList.contains('hidden');
            closeAllSelects();
            if (!isOpen) {
                openSelect();
            }
        });

        options.forEach(option => {
            option.addEventListener('click', (e) => {
                e.stopPropagation();
                const value = option.dataset.value;
                const text = option.textContent.trim();

                hiddenInput.value = value;

                if (value === '') {
                    label.textContent = select.querySelector('[data-value=""]')?.textContent || 'Select an option';
                    label.classList.add('text-slate-500');
                    label.classList.remove('text-slate-900');
                } else {
                    label.textContent = text;
                    label.classList.remove('text-slate-500');
                    label.classList.add('text-slate-900');
                }

                updateOptionStyles(option);

                closeAllSelects();

                const event = new Event('change', { bubbles: true });
                hiddenInput.dispatchEvent(event);
            });
        });

        optionsList.addEventListener('click', (e) => {
            e.stopPropagation();
        });

        document.addEventListener('click', () => {
            closeAllSelects();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeAllSelects();
            }
        });

        function openSelect() {
            optionsList.classList.remove('hidden');
            arrow.classList.add('rotate-180');
            button.setAttribute('aria-expanded', 'true');
        }

        function updateOptionStyles(selectedOption) {
            options.forEach(opt => {
                opt.classList.remove('bg-blue-50', 'text-blue-800');
                opt.classList.add('text-slate-700');
            });
            selectedOption.classList.remove('text-slate-700');
            selectedOption.classList.add('bg-blue-50', 'text-blue-800');
        }

        const currentValue = hiddenInput.value;
        if (currentValue) {
            const optionElement = Array.from(options).find(opt => opt.dataset.value === currentValue);
            if (optionElement) {
                label.textContent = optionElement.textContent.trim();
                label.classList.remove('text-slate-500');
                label.classList.add('text-slate-900');
                updateOptionStyles(optionElement);
            }
        }
    });

    function closeAllSelects() {
        document.querySelectorAll('.select-options').forEach(list => {
            list.classList.add('hidden');
        });
        document.querySelectorAll('.select-arrow').forEach(arrow => {
            arrow.classList.remove('rotate-180');
        });
        document.querySelectorAll('[data-select-button]').forEach(btn => {
            btn.setAttribute('aria-expanded', 'false');
        });
    }
});
</script>
@endPushOnce
