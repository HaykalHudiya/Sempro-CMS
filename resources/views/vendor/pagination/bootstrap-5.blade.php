@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Tautan ke halaman pertama --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.first')">
                <span class="page-link" aria-hidden="true">&laquo;</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url(1) }}" rel="prev"
                    aria-label="@lang('pagination.first')">&laquo;</a>
            </li>
        @endif

        {{-- Tautan ke halaman sebelumnya --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif

        {{-- Loop untuk tautan halaman individu --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span
                                class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Tautan ke halaman berikutnya --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                    aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true">&rsaquo;</span>
            </li>
        @endif

        {{-- Tautan ke halaman terakhir --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}" rel="next"
                    aria-label="@lang('pagination.last')">&raquo;</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.last')">
                <span class="page-link" aria-hidden="true">&raquo;</span>
            </li>
        @endif
    </ul>
@endif
