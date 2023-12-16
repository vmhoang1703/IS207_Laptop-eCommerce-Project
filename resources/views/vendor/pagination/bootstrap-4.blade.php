<style>
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination .page-item {
        margin: 0 5px;
        display: inline-block;
    }

    .pagination .page-link {
        color: #000000;
        background-color: #fff;
        border: 1px solid #dee2e6;
    }

    .pagination .page-link:hover {
        background-color: #D9D9D9;
        color: #000000;
        border-color: #D9D9D9;
    }

    .pagination .page-item.active .page-link {
        background-color: #D9D9D9;
        color: #000000;
        border-color: #D9D9D9;
    }
</style>

@if ($paginator->hasPages())
<ul class="pagination">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
        <span class="page-link" aria-hidden="true">&lsaquo;</span>
    </li>
    @else
    <li class="page-item">
        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
    </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
    @else
    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <li class="page-item">
        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
    </li>
    @else
    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
        <span class="page-link" aria-hidden="true">&rsaquo;</span>
    </li>
    @endif
</ul>
@endif