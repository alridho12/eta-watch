@extends('layouts.app')

@section('content')
    <div class="container py-md-3">
        <div class="p-md-5 p-2 mb-4 rounded-3 trone position-relative overflow-hidden">
            <p class="container-fluid d-md-block d-none fw-light fs-6 text-end mb-0">ETAWatch.</p>
            {{-- <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"></div> --}}
            {{-- <div class="container-fluid py-3 py-md-5 d-flex flex-column align-items-start position-relative z-1 text-white">
                <h1 class="display-5 fw-semibold text-uppercase text-start">Jual Beli Jam Tangan Mewah </h1>
                <p class="col-md-7 fs-4 text-start text-break fw-lighter">Temukan koleksi eksklusif atau jual koleksi Anda.
                </p>
                <div class="d-flex flex-column flex-md-row gap-2 mt-2">
                    <a href="https://wa.me/6281381866668" class="btn btn-light text-dark">Jual Sekarang</a>
                    <a href="/katalog" class="btn btn-outline-light">Lihat Koleksi</a>
                </div>
            </div> --}}
            <div class="container-fluid py-3 py-md-5 d-flex flex-column align-items-start position-relative z-1 text-white">
                <!-- Judul Utama -->
                <h1 class="fw-bold text-uppercase lh-1 mb-3" style="font-size: 3rem;">
                    Jual Beli <br>
                    Jam <br>
                    Mewah
                </h1>

                <!-- Tagline -->
                <p class="fs-5 fw-semibold text-secondary mb-4">
                    Presisi - Prestise - Abadi
                </p>

                <!-- Tombol -->
                <div class="d-flex flex-column flex-md-row gap-2">
                    <a href="https://wa.me/6281381866668" class="btn btn-light text-dark fw-semibold">
                        Jual Sekarang
                    </a>
                    <a href="/katalog" class="btn btn-outline-light fw-semibold">
                        Lihat Koleksi
                    </a>
                </div>
            </div>

        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-6 mb-2 mb-md-0">
                <div class="h-100 p-5 left-trone rounded-3 d-flex flex-column justify-content-end align-items-start">
                    <p class="fs-4 text-start text-uppercase">Temukan konten menarik</p>
                    <a
                        href="https://www.instagram.com/etawatch.idn?utm_source=ig_web_button_share_sheet&igsh=NWtteHZxdm9ta24y"><button
                            class="btn btn-outline-light" type="button">Kunjungi Instagram</button></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 right-trone rounded-3 d-flex flex-column justify-content-center align-items-start">
                    <h2 class="text-uppercase">Info Pemasanan</h2>
                    <p class="text-start">Hubungi kami via WhatsApp untuk pemesanan cepat dan mudah.</p>
                    <a href="https://wa.me/6281381866668"><button class="btn btn-outline-light" type="button">Whatsap
                            Kami</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-3 my-5 border-top">
        <div class="py-md-1 d-flex flex-column justify-content-center align-items-center">
            <h5 class="fw-bold my-4 text-uppercase">Brand terpopuler</h5>
            <div class="group-brand d-flex justify-content-center align-items-center gap-4 flex-wrap ">
                <a href="{{ url('/katalog') }}?brand=4"><img class="img-fluid brand-logo"
                        src="{{ asset('public/images/brand/rolex.png') }}" alt=""></a>
                <a href="{{ url('/katalog') }}?brand=13"><img class="img-fluid brand-logo"
                        src="{{ asset('public/images/brand/ap.png') }}" alt=""></a>
                <a href="{{ url('/katalog') }}?brand=11"><img class="img-fluid brand-logo"
                        src="{{ asset('public/images/brand/tag.png') }}" alt=""></a>
                <a href="{{ url('/katalog') }}?brand=10"><img class="img-fluid brand-logo"
                        src="{{ asset('public/images/brand/omega.png') }}" alt=""></a>
                <a href="{{ url('/katalog') }}?brand=7"><img class="img-fluid brand-logo"
                        src="{{ asset('public/images/brand/cartier.png') }}" alt=""></a>
                <a href="{{ url('/katalog') }}?brand=5"><img class="img-fluid brand-logo"
                        src="{{ asset('public/images/brand/patek.png') }}" alt=""></a>
            </div>
        </div>
        {{-- <div class="py-md-1 my-5">
            <h5 class="fw-bold my-4 text-uppercase text-center">Jam Tangan Promo</h5>
            <div class="container">
                <div class="row g-3 justify-content-center justify-content-md-start" id="katalog-container">
                    @foreach ($katalog_sale as $index => $item)
                        <div class="col-6 col-md-4 col-lg-2 katalog-item {{ $index >= 6 ? 'd-none' : '' }}">
                            <a href="{{$item->katalog->link}}" style="text-decoration: none">
                                <div class="card bg-black shadow-sm border-0 h-100">
                                <div class="position-relative">
                                    @if (!is_null($item))
                                        <span class="badge bg-danger position-absolute top-0 start-0 m-2">SALE</span>
                                    @endif
                                    <img src="{{ asset('public/storage/gambar-katalog/' . $item->katalog->gambar) }}"
                                        class="card-img-top" style="height: 180px; object-fit: cover;"
                                        alt="{{ $item->katalog->nama_katalog }}">
                                </div>
                                <div class="card-body text-start d-flex flex-column">
                                    <h6 class="card-title mb-1 text-white" style="font-size: 0.85rem; min-height: 40px;">
                                        {{ $item->katalog->nama_katalog }}
                                    </h6>
                                    <h6 class="card-title mb-1 text-white description" style="font-size: 0.85rem; min-height: 48px;">
                                        {{ $item->katalog->deskripsi }}
                                    </h6>
                                    <p class="text-light mb-1" style="font-size: 0.75rem;">
                                        {{ $item->katalog->brand->nama_brand ?? '-' }}
                                    </p>
                                    @if (!is_null($item))
                                        @php
                                            $sale = $item->first();
                                            $harga_normal = (int) str_replace(',', '', $sale->harga_normal);
                                            $harga_sales = (int) str_replace(',', '', $sale->harga_sales);
                                            $diskon =
                                                $harga_normal > 0
                                                    ? round((($harga_normal - $harga_sales) / $harga_normal) * 100)
                                                    : 0;
                                        @endphp
                                        <h6 class="fw-bold text-danger mb-1">
                                            Rp {{ number_format($harga_sales, 0, ',', '.') }}
                                        </h6>
                                        <p class="mb-0" style="font-size: 0.8rem;">
                                            <s class="text-light">
                                                Rp {{ number_format($harga_normal, 0, ',', '.') }}
                                            </s>
                                            <span class="text-danger ms-1">Disc. {{ $diskon }}%</span>
                                        </p>
                                    @else
                                        <h6 class="fw-bold text-white mb-1">
                                            Rp {{ number_format($item->katalog->harga, 0, ',', '.') }}
                                        </h6>
                                    @endif
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <!-- Tombol di tengah -->
                <div class="text-center mt-4">
                    <button class="btn btn-light" id="lihat-semua">Lihat Semua</button>
                </div>
            </div>
        </div> --}}
    </div>

    <div class="">
        <div class="p-md-5 p-2 mb-4 location d-flex flex-column justify-content-end">
            <div class="container-fluid py-md-5 d-flex flex-column align-items-start">
                <h1 class="display-5 fw-bold text-uppercase text-start">ETAwatch store.</h1>
                <a href="https://maps.app.goo.gl/RUHroy1mDYX6Asqp9"><button class="btn btn-light" type="button">Lokasi
                        Toko offline</button></a>
            </div>
        </div>
    </div>
@endsection

<!-- Script -->
<script>
    document.getElementById('lihat-semua').addEventListener('click', function() {
        document.querySelectorAll('.katalog-item').forEach(el => {
            el.classList.remove('d-none');
        });
        this.style.display = 'none';
    });
</script>
