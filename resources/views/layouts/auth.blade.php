<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI for Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/coreui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.0/dist/css/" rel="stylesheet" integrity="sha384-J2WCKfhPxbtZAT+USOoPNCnZVozpAaGtaH/LUcSKXjdCXN85i5fGMTy1Agp8HChK" crossorigin="anonymous"> --}}

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-12 p-4 mb-0">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: CoreUI for Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>


</body>

</html>
