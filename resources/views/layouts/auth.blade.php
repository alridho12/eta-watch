<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="auto">

@include('layouts.partials.head')


<body class="vh-100">
    <div class="container-fluid">

        {{-- @include('layouts.partials.sidebar') --}}

        <main class="container-xxl flex-grow-1 container-p-y">
            @yield('content')

        </main>


    </div>
    {{-- @include('layouts.partials.footer') --}}

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('js')
</body>

</html>
