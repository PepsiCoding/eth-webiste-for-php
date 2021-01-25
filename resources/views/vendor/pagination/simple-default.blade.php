@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination pagination-lg justify-content-center mt-3" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <a class="page-link" rel="prev" aria-label="@lang('pagination.previous')" style = "border-radius:50%;background-color:#fff">
                    <i style='color:#396ec2' class='fas kt-font-xl' >&#xf0d9;</i>
                </a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" style = "border-radius:50%;background-color:#fff">
                    <i style='color:#396ec2' class='fas kt-font-xl' >&#xf0d9;</i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item" aria-current="page"><a class="page-link">{{ $page }}</a></li>
                    @else
                        <li><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" style = "border-radius:50%; background-color:#fff">
                    <i style='color:#396ec2' class='fas kt-font-xl' >&#xf0da;</i>
                </a>
            </li>
        @else
            <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
                <a class="page-link" rel="next" aria-label="@lang('pagination.next')" style = "border-radius:50%; background-color:#fff">
                    <i style='color:#396ec2' class='fas' >&#xf0da;</i>
                </a>
            </li>
        @endif
    </ul>
</nav>
@endif