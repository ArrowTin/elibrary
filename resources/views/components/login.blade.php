<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ config('app.name') }} </title>
    <link rel="icon" type="image/x-icon" href="{{asset("/img/KA.png")}}" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth&display=swap" rel="stylesheet">

    <style>
        .urbanist-regular {
            font-family: "Urbanist", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .urbanist-medium {
            font-family: "Urbanist", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        .urbanist-semibold {
            font-family: "Urbanist", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }

        .amaranth-regular {
            font-family: "Amaranth", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .amaranth-bold {
            font-family: "Amaranth", sans-serif;
            font-weight: 500;
            font-style: bold;
        }

        .inspect {
            border: 1px solid red;
        }
    </style>

<style>
    body {
        padding-bottom: 72px; /* ruang untuk bottom nav mobile */
    }

    /* ===== Bottom Navbar Mobile ===== */
    @media (max-width: 767.98px) {
        .navbar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            padding: 8px 0 !important;
            border-top: 1px solid #e5e5e5;
        }

        .navbar-brand,
        .navbar-toggler {
            display: none !important;
        }

        .navbar-collapse {
            display: flex !important;
        }

        .navbar-nav,
        .navbar-nav + div {
            flex-direction: row !important;
            width: 100%;
            justify-content: space-around;
        }

        .navbar .nav-link {
            padding: 6px 8px !important;
            font-size: 12px !important;
            text-align: center;
        }

        .nav-icon {
            display: block;
            font-size: 20px;
        }
    }
</style>


    @yield('style')
</head>

<body>
    <!-- KONTEN ASLI -->
    <div id="mobile-only-content">
        @yield('content')
    </div>

    <!-- PESAN NON MOBILE -->
    <div id="desktop-warning" class="d-none">
        <div class="d-flex align-items-center justify-content-center vh-100 text-center px-4">
            <div>
                <h2 class="amaranth-regular mb-3">Akses Ditolak</h2>
                <p class="urbanist-medium text-secondary">
                    Akses gunakan perangkat <strong>seluler</strong> anda
                </p>
            </div>
        </div>
    </div>



</html>
