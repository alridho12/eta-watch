<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="auto">

@include('layouts.partials.head')
<!-- Floating WhatsApp Button -->
<a href="https://wa.me/6281234567890" class="whatsapp-float d-flex align-items-center text-white text-decoration-none">
    <i class="bi bi-whatsapp fs-2"></i>
    <span class="whatsapp-text ms-2">Chat Kami</span>
</a>

<body class="d-flex h-100 text-center text-bg-dark">
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">

        @include('layouts.partials.header')

        <main class="hero">
            @yield('content')
        </main>

        @include('layouts.partials.footer')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
