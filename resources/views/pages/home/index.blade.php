@extends('layouts.app')

@section('content')
    <div class="container py-md-3">
        <div class="p-md-5 p-2 mb-4 rounded-3 trone position-relative overflow-hidden">
            <p class="container-fluid d-md-block d-none fw-light fs-6 text-end mb-0">ETAWatch.</p>
            {{-- <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"></div> --}}
            <div class="container-fluid py-3 py-md-5 d-flex flex-column align-items-start position-relative z-1 text-white">
                <h1 class="display-5 fw-semibold text-uppercase text-start">Jual Beli Jam Tangan Mewah </h1>
                <p class="col-md-7 fs-4 text-start text-break fw-lighter">Temukan koleksi eksklusif atau jual koleksi Anda.
                </p>
                <div class="d-flex flex-column flex-md-row gap-2 mt-2">
                    <a href="https://wa.me/6281381866668" class="btn btn-light text-dark">Jual Sekarang</a>
                    <a href="#" class="btn btn-outline-light">Lihat Koleksi</a>
                </div>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-6 mb-2 mb-md-0">
                <div class="h-100 p-5 left-trone rounded-3 d-flex flex-column justify-content-end align-items-start">
                    <p class="fs-4 text-start text-uppercase">koleksi terbaru 2025</p>
                    <a href=""><button class="btn btn-outline-light" type="button">Lihat Koleksi</button></a>
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
                <a href="#"><img class="img-fluid brand-logo" src="{{ asset('images/brand/rolex.png') }}"
                        alt=""></a>
                <a href="#"><img class="img-fluid brand-logo" src="{{ asset('images/brand/ac.png') }}"
                        alt=""></a>
                <a href="#"><img class="img-fluid brand-logo" src="{{ asset('images/brand/seiko.png') }}"
                        alt=""></a>
                <a href="#"><img class="img-fluid brand-logo" src="{{ asset('images/brand/ck.png') }}"
                        alt=""></a>
                <a href="#"><img class="img-fluid brand-logo" src="{{ asset('images/brand/casio.png') }}"
                        alt=""></a>
                <a href="#"><img class="img-fluid brand-logo" src="{{ asset('images/brand/dw.png') }}"
                        alt=""></a>
            </div>
        </div>
        <div class="py-md-1 my-5 d-flex flex-column justify-content-center align-items-center">
            <h5 class="fw-bold my-4 text-uppercase">Jam Tangan Promo</h5>
            <div class="group-brand d-flex justify-content-center align-items-center gap-4 flex-wrap ">
                <div class="product-promo row row-cols-2 row-cols-md-4 g-3">
                    <div class="col">
                        <div class="card bg-black shadow-sm border-0">
                            <div class="position-relative">
                                <span class="badge bg-danger position-absolute top-0 start-0 m-2">SALE</span>
                                <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                    alt="Jam Tangan Expedition">
                            </div>
                            <div class="card-body text-start">
                                <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                    Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                                <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                                <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                                <p class="mb-0" style="font-size: 0.85rem;">
                                    <s class="text-light text-white">Rp 2.580.000,00</s>
                                    <span class="text-danger ms-2">Disc. 38%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black shadow-sm border-0">
                            <div class="position-relative">
                                <span class="badge bg-danger position-absolute top-0 start-0 m-2">SALE</span>
                                <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                    alt="Jam Tangan Expedition">
                            </div>
                            <div class="card-body text-start">
                                <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                    Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                                <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                                <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                                <p class="mb-0" style="font-size: 0.85rem;">
                                    <s class="text-light text-white">Rp 2.580.000,00</s>
                                    <span class="text-danger ms-2">Disc. 38%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black shadow-sm border-0">
                            <div class="position-relative">
                                <span class="badge bg-danger position-absolute top-0 start-0 m-2">SALE</span>
                                <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                    alt="Jam Tangan Expedition">
                            </div>
                            <div class="card-body text-start">
                                <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                    Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                                <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                                <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                                <p class="mb-0" style="font-size: 0.85rem;">
                                    <s class="text-light text-white">Rp 2.580.000,00</s>
                                    <span class="text-danger ms-2">Disc. 38%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black shadow-sm border-0">
                            <div class="position-relative">
                                <span class="badge bg-danger position-absolute top-0 start-0 m-2">SALE</span>
                                <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                    alt="Jam Tangan Expedition">
                            </div>
                            <div class="card-body text-start">
                                <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                    Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                                <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                                <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                                <p class="mb-0" style="font-size: 0.85rem;">
                                    <s class="text-light text-white">Rp 2.580.000,00</s>
                                    <span class="text-danger ms-2">Disc. 38%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black shadow-sm border-0">
                            <div class="position-relative">
                                <span class="badge bg-danger position-absolute top-0 start-0 m-2">SALE</span>
                                <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                    alt="Jam Tangan Expedition">
                            </div>
                            <div class="card-body text-start">
                                <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                    Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                                <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                                <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                                <p class="mb-0" style="font-size: 0.85rem;">
                                    <s class="text-light text-white">Rp 2.580.000,00</s>
                                    <span class="text-danger ms-2">Disc. 38%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black shadow-sm border-0">
                            <div class="position-relative">
                                <span class="badge bg-danger position-absolute top-0 start-0 m-2">SALE</span>
                                <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                    alt="Jam Tangan Expedition">
                            </div>
                            <div class="card-body text-start">
                                <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                    Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                                <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                                <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                                <p class="mb-0" style="font-size: 0.85rem;">
                                    <s class="text-light text-white">Rp 2.580.000,00</s>
                                    <span class="text-danger ms-2">Disc. 38%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black shadow-sm border-0">
                            <div class="position-relative">
                                <span class="badge bg-danger position-absolute top-0 start-0 m-2">SALE</span>
                                <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                    alt="Jam Tangan Expedition">
                            </div>
                            <div class="card-body text-start">
                                <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                    Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                                <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                                <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                                <p class="mb-0" style="font-size: 0.85rem;">
                                    <s class="text-light text-white">Rp 2.580.000,00</s>
                                    <span class="text-danger ms-2">Disc. 38%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black shadow-sm border-0">
                            <div class="position-relative">
                                <span class="badge bg-danger position-absolute top-0 start-0 m-2">SALE</span>
                                <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                    alt="Jam Tangan Expedition">
                            </div>
                            <div class="card-body text-start">
                                <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                    Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                                <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                                <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                                <p class="mb-0" style="font-size: 0.85rem;">
                                    <s class="text-light text-white">Rp 2.580.000,00</s>
                                    <span class="text-danger ms-2">Disc. 38%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href=""><button class="btn btn-light" type="button">Lihat Semua</button></a>
            </div>
        </div>
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
