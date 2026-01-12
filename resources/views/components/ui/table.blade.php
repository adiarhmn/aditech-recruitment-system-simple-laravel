@props(['headers'])

<div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-slate-50 text-slate-500 border-b border-slate-200">
                <tr>
                    @foreach($headers as $header)
                        <th class="px-6 py-4 font-semibold {{ $loop->last ? 'text-right' : '' }}">
                            {{ $header }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                {{ $slot }}
            </tbody>
        </table>
    </div>
    
    @if(isset($pagination))
        <div class="px-6 py-4 bg-slate-50 border-t border-slate-200">
            {{ $pagination }}
        </div>
    @endif
</div>
