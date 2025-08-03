@extends('layouts.app')

@section('content')
    <div class="bg-black mb-5 py-4 py-md-5">
        <!-- Mengapa Memilih Kami -->
        <section class=" pt-5 container ">
            <h3 class="mb-4">Mengapa Memilih Kami</h3>
            <p class="text-light fw-light">Kami berkomitmen memberikan pelayanan terbaik dengan proses cepat, aman, dan
                transparan.
                Penjual mendapatkan harga tertinggi, dan pembeli memperoleh jam tangan original dengan harga terbaik.</p>
            <div class="row mt-4 g-4">
                <div class="col-md-3 text-center">
                    <i class="bi bi-shield-check fs-1 text-primary"></i>
                    <h5 class="mt-3">Jaminan Keaslian</h5>
                    <p>Kami hanya menjual jam tangan 100% original dan bergaransi resmi.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bi bi-whatsapp fs-1 text-success"></i>
                    <h5 class="mt-3">Layanan via WhatsApp</h5>
                    <p>Pesan langsung dan konsultasi cepat melalui WhatsApp dengan tim kami.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bi bi-box-seam fs-1 text-warning"></i>
                    <h5 class="mt-3">Pengiriman Aman</h5>
                    <p>Pengiriman cepat & aman ke seluruh Indonesia dengan kurir terpercaya.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bi bi-gem fs-1 text-danger"></i>
                    <h5 class="mt-3">Produk Premium</h5>
                    <p>Kami menyediakan koleksi eksklusif dari brand jam tangan ternama dunia.</p>
                </div>
            </div>
        </section>
    </div>
    <!-- Layanan Kami -->
    <section class="mb-5">
        <div class="container">
            <h3 class="mb-4">Layanan Kami</h3>
            <p class="text-light fw-light">
                Kami menyediakan berbagai layanan untuk memenuhi kebutuhan jam tangan mewah Anda
            </p>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card bg-transparent border-light h-100 shadow-sm">
                        <div class="card-body text-light">
                            <div class="mb-3">
                                <i class="bi bi-cart-check fs-1 text-success"></i>
                            </div>
                            <h5 class="card-title">Pembelian Langsung</h5>
                            <p class="card-text">Kami siap menjual jam tangan mewah dengan penawaran terbaik.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-light h-100 shadow-sm">
                        <div class="card-body text-light">
                            <div class="mb-3">
                                <i class="bi bi-bag-heart fs-1 text-warning"></i>
                            </div>
                            <h5 class="card-title">Pre-Order</h5>
                            <p class="card-text">Kami bantu dapatkan jam impian Anda yang belum tersedia.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-light h-100 shadow-sm">
                        <div class="card-body text-light">
                            <div class="mb-3">
                                <i class="bi bi-cash-coin fs-1 text-info"></i>
                            </div>
                            <h5 class="card-title">Jual Jam Tangan</h5>
                            <p class="card-text">Jual jam tangan Anda dengan mudah, aman, dan harga terbaik di pasar.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-light h-100 shadow-sm">
                        <div class="card-body text-light">
                            <div class="mb-3">
                                <i class="bi bi-arrow-left-right fs-1 text-danger"></i>
                            </div>
                            <h5 class="card-title">Tukar Tambah</h5>
                            <p class="card-text">Ingin upgrade? Tukarkan jam lama Anda untuk mendapatkan yang baru.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Call to Action -->
    <section class="text-center mt-5">
        <h4>Ingin Bertanya atau Konsultasi?</h4>
        <p>Langsung hubungi kami melalui WhatsApp sekarang!</p>
        <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success btn-lg mt-3">
            <i class="bi bi-whatsapp me-2"></i>Hubungi Kami
        </a>
    </section>
@endsection
