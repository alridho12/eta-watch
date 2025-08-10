<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="auto">

@include('layouts.partials.head')


<body class="min-vh-100">
    <div class="d-flex vh-100 flex-nowrap">

        @include('layouts.partials.sidebar')

        <main class="container-xxl flex-grow-1 container-p-y">
            @yield('content')

            @yield('modal')
        </main>


    </div>
    @include('layouts.partials.footer')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.5/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.5/js/responsive.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    @yield('js')
</body>

</html>
