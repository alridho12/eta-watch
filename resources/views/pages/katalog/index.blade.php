@extends('layouts.app')

@section('content')
    <div class="container py-md-3 mb-5">
        <div class="rounded-3 bg-black">
            <div class="trone-katalog p-md-5 p-2">
                <p class="container-fluid fw-light fs-6 text-end mb-0 my-1">ETAWatch.</p>
                {{-- <div
                    class="container-fluid h-100 py-3 py-md-5 d-flex flex-column justify-content-end align-items-start position-relative text-white">
                    <h1 class="display-6 fw-semibold text-uppercase text-start">KOLEKSI KAMI. </h1>
                </div> --}}
                <div
                    class="container-fluid py-7 py-md-5 d-flex flex-column align-items-start position-relative z-1 text-white">
                    <!-- Judul Utama -->
                    <h1 class="fw-bold text-uppercase lh-1 mb-3 text-start katalog-title">
                        Jual Beli <br>
                        Jam <br>
                        Mewah
                    </h1>

                    <!-- Tagline -->
                    <p class="fs-5 fw-semibold text-secondary mb-4 mt-md-0 mt-3">
                        Presisi - Prestise - Abadi
                    </p>

                    <!-- Tombol -->
                    {{-- <div class="d-flex flex-column flex-md-row gap-2">
                        <a href="https://wa.me/6281381866668" class="btn btn-light text-dark fw-semibold">
                            Jual Sekarang
                        </a>
                        <a href="/katalog" class="btn btn-outline-light fw-semibold">
                            Lihat Koleksi
                        </a>
                    </div> --}}
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
                                @foreach ($brands as $item)
                                    <div class="brand-item col"><a href="#"
                                            class="text-white text-decoration-none d-block brand-link"
                                            data-brand-id="{{ $item->pk_id_brand }}">
                                            {{ $item->nama_brand }}</a></div>
                                @endforeach

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
                        {{-- <option value="price-asc">Harga Terendah</option>
                        <option value="price-desc">Harga Tertinggi</option> --}}
                    </select>
                </div>
            </div>

            <!-- Pagination -->
            <nav class="pagination-container d-none d-md-flex">
                {{ $katalog->links('pagination::bootstrap-5') }}
            </nav>
        </div>
    </section>
    <section class="container border-top">
        <h5 class="fw-bold my-4 text-uppercase text-start">Semua Koleksi</P>
        </h5>
        <div class="mb-4">
            <form action="" method="GET" class="d-flex" role="search">
                <input type="text" name="search" class="form-control me-2  shadow-sm border-0"
                    placeholder="Cari produk..." aria-label="Search">
            </form>
        </div>
        <div id="katalog-list-container"
            class="group-brand d-flex justify-content-center align-items-center gap-4 flex-wrap ">
            @include('pages.katalog.partials.katalog-list', ['katalog' => $katalog])

        </div>
    </section>
@endsection

@section('js')
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

        $(document).ready(function() {
            let searchTimeout;
            let selectedBrand = new URLSearchParams(window.location.search).get('brand') || '';

            // Fungsi utama untuk load katalog
            function loadKatalog(page = 1) {
                $.ajax({
                    url: `/katalog/get?page=${page}`,
                    method: 'GET',
                    data: {
                        search: $('input[name="search"]').val(),
                        sort: $('#sort').val(),
                        brand: selectedBrand
                    },
                    success: function(res) {
                        // Update hanya bagian produk + pagination
                        $('#katalog-list-container').html(res.html);
                        $('.pagination-container').html(res.pagination)
                        $('#brandsMenu').addClass('d-none');
                    },
                    error: function() {
                        console.error('Gagal memuat katalog');
                    }
                });
            }

            loadKatalog();

            // Klik brand
            $(document).on('click', '.brand-link', function(e) {
                e.preventDefault();
                selectedBrand = $(this).data('brand-id');
                loadKatalog();
            });

            // Pagination
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                loadKatalog(page);
            });

            // Search (debounce)
            $(document).on('keyup', 'input[name="search"]', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(function() {
                    loadKatalog();
                }, 300);
            });

            // Filter & Sort
            $('#sort').on('change', function() {
                loadKatalog();
            });

        });
    </script>
@endsection
