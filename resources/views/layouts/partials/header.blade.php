<header class="mb-auto w-100 position-fixed top-0 start-0 end-0 z-3 bg-dark">
    {{-- <div class="bg-black dark-shadow py-2 px-3 d-flex justify-content-md-center justify-content-between  align-items-center">
        <!-- Logo -->
        <img class="logo" src="{{ asset('public/images/logos.png') }}" alt="Logo">
        <p class="fs-4 d-block d-md-none mb-0">ETAwatch.</p>
        <!-- Hamburger icon (only mobile) -->
        <button class="btn text-white d-md-none" id="menuToggle" style="font-size: 1.5rem;">
            <i class="bi bi-list"></i>
        </button>
    </div> --}}
    <div class="bg-black dark-shadow py-2 px-3 d-flex align-items-center position-relative">
        <!-- Tulisan ETAwatch -->
        <p class="fs-4 mb-0 text-white position-absolute top-50 start-50 translate-middle">
            ETAwatch.
        </p>

        <!-- Hamburger icon (hanya mobile) -->
        <button class="btn text-white d-md-none ms-auto" id="menuToggle" style="font-size: 1.5rem;">
            <i class="bi bi-list"></i>
        </button>
    </div>



    <!-- Navigation Links -->
    <nav id="mainNav" class="nav nav-masthead pb-1 pt-2 px-0 justify-content-center text-uppercase d-none d-md-flex">
        <a class="nav-link fw-bold active" href="/home">Beranda</a>
        <a class="nav-link fw-bold" href="/about-me">Tentang Kami</a>
        <a class="nav-link fw-bold" href="/katalog">Katalog</a>
        <a class="nav-link fw-bold" href="/kontak">Kontak</a>
    </nav>

    <!-- Mobile Menu (hidden by default) -->
    <div id="mobileNav" class="d-md-none bg-black text-uppercase text-center py-2 d-none">
        <a class="nav-link fw-bold d-block text-white py-1" href="/home">Beranda</a>
        <a class="nav-link fw-bold d-block text-white py-1" href="/about-me">Tentang Kami</a>
        <a class="nav-link fw-bold d-block text-white py-1" href="/katalog">Katalog</a>
        <a class="nav-link fw-bold d-block text-white py-1" href="/kontak">Kontak</a>
    </div>
</header>

<script>
    const toggleBtn = document.getElementById('menuToggle');
    const mobileNav = document.getElementById('mobileNav');

    toggleBtn.addEventListener('click', function() {
        mobileNav.classList.toggle('d-none');
    });
</script>
