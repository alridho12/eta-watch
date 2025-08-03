@extends('layouts.app')

@section('content')
    <div class="container py-md-3 mb-5">
        <div class="rounded-3 bg-black">
            <div class="trone-katalog py-2">
                <p class="container-fluid fw-light fs-6 text-end mb-0 my-1">ETAWatch.</p>
                <div
                    class="container-fluid h-100 py-3 py-md-5 d-flex flex-column justify-content-end align-items-start position-relative text-white">
                    <h1 class="display-6 fw-semibold text-uppercase text-start">KOLEKSI KAMI. </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="container mb-5">
        <div
            class="container bg-black d-flex justify-content-md-between justify-content-center align-items-center flex-wrap mb-4 p-3 rounded-3">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3">
                <!-- Tombol Brands -->
                <div class="position-relative me-auto mb-md-0 ">
                    <button class="btn btn-outline-light" id="brandsToggle">Brands</button>

                    <!-- Fullscreen Brands Menu -->
                    <div id="brandsMenu" class="position-fixed top-0 start-0 w-100 h-100 bg-dark text-white d-none"
                        style="z-index: 1050; overflow-y: auto;">
                        <div class="container py-5">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="text-white">All Brands</h3>
                                <button class="btn btn-outline-light" id="closeBrandsMenu">&times;</button>
                            </div>

                            <div class="row row-cols-2 row-cols-md-4 g-4">
                                <!-- Daftar merek -->
                                <div class="col"><a href="#" class="text-white text-decoration-none d-block">A.
                                        Lange &
                                        Söhne</a></div>
                                <div class="col"><a href="#"
                                        class="text-white text-decoration-none d-block">Audemars
                                        Piguet</a></div>
                                <div class="col"><a href="#" class="text-white text-decoration-none d-block">Baume
                                        &
                                        Mercier</a></div>
                                <div class="col"><a href="#" class="text-white text-decoration-none d-block">Bell &
                                        Ross</a></div>
                                <div class="col"><a href="#"
                                        class="text-white text-decoration-none d-block">Breguet</a></div>
                                <div class="col"><a href="#"
                                        class="text-white text-decoration-none d-block">Breitling</a></div>
                                <div class="col"><a href="#"
                                        class="text-white text-decoration-none d-block">Bvlgari</a></div>
                                <div class="col"><a href="#"
                                        class="text-white text-decoration-none d-block">Cartier</a></div>
                                <div class="col"><a href="#"
                                        class="text-white text-decoration-none d-block">Chopard</a></div>
                                <div class="col"><a href="#" class="text-white text-decoration-none d-block">Franck
                                        Muller</a></div>
                                <div class="col"><a href="#" class="text-white text-decoration-none d-block">Grand
                                        Seiko</a></div>
                                <div class="col"><a href="#"
                                        class="text-white text-decoration-none d-block">Hublot</a>
                                </div>
                                <!-- Tambahkan brand lainnya sesuai kebutuhan -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filter -->
                <div class="d-flex align-items-center mb-2 mb-md-0">
                    <label for="sort" class="form-label me-2 text-light mb-0">Sortir berdasarkan:</label>
                    <select class="form-select bg-dark text-light border-0 shadow-sm" id="sort" style="width: 180px;">
                        <option value="default">Terbaru</option>
                        <option value="price-asc">Harga Terendah</option>
                        <option value="price-desc">Harga Tertinggi</option>
                        <option value="discount">Diskon Terbesar</option>
                    </select>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation" class="d-none d-md-flex">
                <ul class="pagination pagination-dark mb-0">
                    <li class="page-item">
                        <a class="page-link bg-dark text-light border-0" href="#">«</a>
                    </li>
                    <li class="page-item"><a class="page-link bg-dark text-light border-0" href="#">1</a></li>
                    <li class="page-item"><a class="page-link bg-dark text-light border-0" href="#">2</a></li>
                    <li class="page-item active">
                        <a class="page-link bg-warning text-dark border-0" href="#">3</a>
                    </li>
                    <li class="page-item"><a class="page-link bg-dark text-light border-0" href="#">4</a></li>
                    <li class="page-item disabled"><a class="page-link bg-dark text-light border-0" href="#">...</a>
                    </li>
                    <li class="page-item"><a class="page-link bg-dark text-light border-0" href="#">21</a></li>
                    <li class="page-item">
                        <a class="page-link bg-dark text-light border-0" href="#">»</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="container border-top">
        <h5 class="fw-bold my-4 text-uppercase text-start">Semua Koleksi</P>
        </h5>
        <div class="group-brand d-flex justify-content-center align-items-center gap-4 flex-wrap ">
            <div class="product-promo row row-cols-2 row-cols-md-4 g-3">
                <div class="col">
                    <div class="card bg-black shadow-sm border-0">
                        <div class="position-relative">
                            <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                alt="Jam Tangan Expedition">
                        </div>
                        <div class="card-body text-start">
                            <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                            <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                            <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black shadow-sm border-0">
                        <div class="position-relative">
                            <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                alt="Jam Tangan Expedition">
                        </div>
                        <div class="card-body text-start">
                            <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                            <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                            <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black shadow-sm border-0">
                        <div class="position-relative">
                            <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                alt="Jam Tangan Expedition">
                        </div>
                        <div class="card-body text-start">
                            <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                            <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                            <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black shadow-sm border-0">
                        <div class="position-relative">
                            <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                alt="Jam Tangan Expedition">
                        </div>
                        <div class="card-body text-start">
                            <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                            <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                            <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black shadow-sm border-0">
                        <div class="position-relative">
                            <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                alt="Jam Tangan Expedition">
                        </div>
                        <div class="card-body text-start">
                            <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                            <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                            <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black shadow-sm border-0">
                        <div class="position-relative">
                            <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                alt="Jam Tangan Expedition">
                        </div>
                        <div class="card-body text-start">
                            <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                            <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                            <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black shadow-sm border-0">
                        <div class="position-relative">
                            <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                alt="Jam Tangan Expedition">
                        </div>
                        <div class="card-body text-start">
                            <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                            <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                            <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                        </div>
                    </div>
                </div>
               <div class="col">
                    <div class="card bg-black shadow-sm border-0">
                        <div class="position-relative">
                            <img src="{{ asset('images/produk/exp.png') }}" class="card-img-top"
                                alt="Jam Tangan Expedition">
                        </div>
                        <div class="card-body text-start">
                            <h6 class="card-title mb-1 text-white" style="font-size: 0.9rem;">Jam Tangan S Expedition
                                Chronograph E 6402 MCLURBU Men Blue Dial Brown Leather Strap</h6>
                            <p class="text-light text-white mb-1" style="font-size: 0.8rem;">S Expedition</p>
                            <h5 class="fw-bold text-danger mb-1">Rp 1.599.600,00</h5>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation" class="d-none d-md-flex">
                <ul class="pagination pagination-dark mb-0">
                    <li class="page-item">
                        <a class="page-link bg-black text-light border-0" href="#">«</a>
                    </li>
                    <li class="page-item"><a class="page-link bg-black text-light border-0" href="#">1</a></li>
                    <li class="page-item"><a class="page-link bg-black text-light border-0" href="#">2</a></li>
                    <li class="page-item active">
                        <a class="page-link bg-warning text-black border-0" href="#">3</a>
                    </li>
                    <li class="page-item"><a class="page-link bg-black text-light border-0" href="#">4</a></li>
                    <li class="page-item disabled"><a class="page-link bg-black text-light border-0" href="#">...</a>
                    </li>
                    <li class="page-item"><a class="page-link bg-black text-light border-0" href="#">21</a></li>
                    <li class="page-item">
                        <a class="page-link bg-black text-light border-0" href="#">»</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.getElementById('brandsToggle');
        const closeButton = document.getElementById('closeBrandsMenu');
        const brandsMenu = document.getElementById('brandsMenu');

        if (toggleButton && closeButton && brandsMenu) {
            toggleButton.addEventListener('click', function() {
                brandsMenu.classList.remove('d-none');
            });

            closeButton.addEventListener('click', function() {
                brandsMenu.classList.add('d-none');
            });
        }
    });
</script>
