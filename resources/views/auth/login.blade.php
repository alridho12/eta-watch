@extends('layouts.auth')
@section('title', 'Login')

@section('content')
    <div class="d-flex align-items-center py-4 h-100">
        <main class="card form-signin w-100 m-auto">
            <form method="POST" action="{{ route('login') }}">
                @csrf <!-- Tambahkan CSRF Token -->

                <img class="mb-4 mx-auto d-block" src="{{ asset('images/logos.png') }}" alt="" width="100" height="100">

                <h1 class="h3 mb-3 fw-normal">Please Login</h1>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password"
                        required>
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" name="remember" value="1" id="checkDefault">
                    <label class="form-check-label" for="checkDefault">Remember me</label>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; ETAWatchstore.</p>
            </form>

        </main>
    </div>
@endsection

</html>
