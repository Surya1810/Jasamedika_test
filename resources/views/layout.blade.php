<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jasamedika | @yield('title')</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    @stack('css')
</head>

<body>
    <div class="container">
        {{-- Ini Header --}}
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <Strong>Jasamedika Saranatama</Strong>
                </a>
            </div>

            {{-- <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2">Admin</a></li>
                <li><a href="#" class="nav-link px-2"></a></li>
                <li><a href="#" class="nav-link px-2">FAQs</a></li>
                <li><a href="#" class="nav-link px-2">About</a></li>
            </ul> --}}
            <div class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <h5>Test Laravel</h5>
            </div>

            <div class="col-md-3 text-end">
                {{-- <a href="{{ route('login') }}" type="button" class="btn btn-outline-primary me-2">With Login</a>
                <a href="{{ route('home') }}" type="button" class="btn btn-primary">Without Login</a> --}}
            </div>
        </header>

        @yield('content')
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    @stack('scripts')
</body>

</html>
