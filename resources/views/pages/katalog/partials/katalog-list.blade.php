<div class="product-promo row row-cols-2 row-cols-md-4 g-3">
    @foreach ($katalog as $item)
        <a href="{{ $item->link }}" style="text-decoration: none">
            <div class="col">
            <div class="card bg-black shadow-sm border-0">
                <div class="position-relative">
                    @if ($item->status == 'Sold')
                        <span class="badge bg-dark position-absolute top-0 start-0 m-2">SOLD</span>
                    @endif
                    <img src="{{ asset('/storage/gambar-katalog/' . $item->gambar) }}" class="card-img-top" alt="">
                </div>
                <div class="card-body text-start">
                    <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">{{ $item->nama_katalog }}</h6>
                    <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem; min-height: 48px;">
                        {{ $item->deskripsi }}</h6>
                    <p class="text-light mb-1" style="font-size: 0.8rem;">
                        {{ $item->brand->nama_brand ?? '-' }}</p>
                    <h5 class="fw-bold text-danger mb-1">Rp {{ number_format($item->harga, 0, ',', '.') }}</h5>
                </div>
            </div>
        </div>
        </a>
    @endforeach
</div>

<div class="mt-4">
    @include('pages.katalog.partials.pagination', ['katalog' => $katalog])
</div>
