@if ($paginator->hasPages())
    <div class="flex items-center justify-between">
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-xs text-slate-500">
                    Showing
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    to
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    of
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    results
                </p>
            </div>
            <div>
                <span class="relative z-0 inline-flex shadow-sm rounded-md">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="relative inline-flex items-center px-3 py-1.5 rounded-l-md border border-slate-200 bg-white text-xs font-medium text-slate-300 cursor-default leading-5">
                                Previous
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-3 py-1.5 rounded-l-md border border-slate-200 bg-white text-xs font-medium text-slate-500 hover:text-blue-800 hover:bg-slate-50 focus:z-10 focus:outline-none focus:ring ring-blue-800 focus:border-blue-800 active:bg-slate-100 active:text-slate-500 transition ease-in-out duration-150" aria-label="@lang('pagination.previous')">
                            Previous
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-3 py-1.5 border border-slate-200 bg-white text-xs font-medium text-slate-700 cursor-default leading-5">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="relative inline-flex items-center px-3 py-1.5 border border-blue-800 bg-blue-800 text-xs font-medium text-white cursor-default leading-5">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="relative inline-flex items-center px-3 py-1.5 border border-slate-200 bg-white text-xs font-medium text-slate-500 hover:text-blue-800 hover:bg-slate-50 focus:z-10 focus:outline-none focus:ring ring-blue-800 focus:border-blue-800 active:bg-slate-100 active:text-slate-500 transition ease-in-out duration-150" aria-label="@lang('pagination.goto_page', ['page' => $page])">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-3 py-1.5 rounded-r-md border border-slate-200 bg-white text-xs font-medium text-slate-500 hover:text-blue-800 hover:bg-slate-50 focus:z-10 focus:outline-none focus:ring ring-blue-800 focus:border-blue-800 active:bg-slate-100 active:text-slate-500 transition ease-in-out duration-150" aria-label="@lang('pagination.next')">
                            Next
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="relative inline-flex items-center px-3 py-1.5 rounded-r-md border border-slate-200 bg-white text-xs font-medium text-slate-300 cursor-default leading-5">
                                Next
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </div>
@endif
