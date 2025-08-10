<style>
    /* Sidebar default tampil di desktop */
    /* Sidebar default */
    .sidebar {
        width: 280px;
        transition: transform 0.3s ease;
    }

    /* Sidebar hidden */
    .sidebar-hidden {
        transform: translateX(-100%);
    }

    /* Mobile: fixed */
    @media (max-width: 768px) {
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1050;
            background-color: #f8f9fa;
        }
    }

    /* Toggle button */
    .sidebar-toggle {
        position: fixed;
        top: 50%;
        left: 280px;
        transform: translateY(-50%);
        background-color: white;
        border-radius: 50%;
        padding: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        z-index: 1100;
        transition: left 0.3s ease;
    }

    .toggle-collapsed {
        left: 10px !important;
    }
</style>

<div class="d-flex">
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar d-flex flex-column flex-shrink-0 p-3 bg-light">
        <!-- konten sidebar yang sudah kamu buat -->
        <a href="/"
            class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
            <svg class="bi pe-none me-2" width="30" height="24" aria-hidden="true">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-5 fw-semibold">ETAWatchstore.</span>
        </a>
        <div class="d-flex align-items-center mb-3">
            <i class="bi bi-person-circle fs-4 me-2"></i>
            <strong>Admin</strong>
        </div>
        <ul class="list-unstyled ps-0 flex-grow-1">
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                    data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                    Katalog
                </button>
                <div class="collapse" id="home-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/admin/katalog"
                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">List Katalog</a>
                        </li>
                        <li><a href="/admin/katalog-sale"
                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Katalog Sale</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    Brands
                </button>
                <div class="collapse" id="dashboard-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/admin/brand"
                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">List Brands</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="border-top my-3"></li>
        </ul>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-box-arrow-right me-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M6.146 11.354a.5.5 0 0 0 .708 0L10 8.207l-3.146-3.147a.5.5 0 0 0-.708.708L8.793 8l-2.647 2.646a.5.5 0 0 0 0 .708z" />
                    <path fill-rule="evenodd" d="M13 8a.5.5 0 0 0-.5-.5H1a.5.5 0 0 0 0 1h11.5a.5.5 0 0 0 .5-.5z" />
                    <path fill-rule="evenodd"
                        d="M13 1a2 2 0 0 0-2-2H3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V1zM3 0a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V0z" />
                </svg>
                Logout
            </button>
        </form>
    </div>

</div>
<!-- Tombol Toggle -->
<div id="sidebarToggle" class="sidebar-toggle">
    <i class="bi bi-chevron-left"></i>
</div>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebarToggle');
    const icon = toggleBtn.querySelector('i');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('sidebar-hidden');
        toggleBtn.classList.toggle('toggle-collapsed');

        if (sidebar.classList.contains('sidebar-hidden')) {
            icon.classList.replace('bi-chevron-left', 'bi-chevron-right');
        } else {
            icon.classList.replace('bi-chevron-right', 'bi-chevron-left');
        }
    });

    // Auto-hide on mobile
    if (window.innerWidth <= 768) {
        sidebar.classList.add('sidebar-hidden');
        toggleBtn.classList.add('toggle-collapsed');
        icon.classList.replace('bi-chevron-left', 'bi-chevron-right');
    }
</script>
