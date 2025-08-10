@if ($katalog->lastPage() > 1)
    <nav>
        <ul class="pagination mb-0">
            {{-- Tombol Previous --}}
            <li class="page-item {{ $katalog->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $katalog->previousPageUrl() }}" aria-label="Previous">
                    «
                </a>
            </li>

            {{-- Nomor halaman --}}
            @foreach ($katalog->getUrlRange(1, $katalog->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $katalog->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach

            {{-- Tombol Next --}}
            <li class="page-item {{ !$katalog->hasMorePages() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $katalog->nextPageUrl() }}" aria-label="Next">
                    »
                </a>
            </li>
        </ul>
    </nav>
@endif
