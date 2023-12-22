<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Webneoo">


    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" href="/favicon/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="/favicon/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/favicon/android-chrome-192x192.png" sizes="192x192" type="image/png">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
<a href="https://wa.me/2348186003399" target="_blank" class="whatsapp-link-btn"><i class="fab fa-whatsapp"></i></a>
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')

    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('/js/wow.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>




</body>

</html>