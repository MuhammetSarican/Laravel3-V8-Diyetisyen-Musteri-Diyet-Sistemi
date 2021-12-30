<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Kuşbabalı Mahoni">
    {{--Tab Icon--}}
    <link rel="shortcut icon" href="{{asset('assets/icons/diet.png')}}" type="image/x-icon" >

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{asset('assets')}}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

</head>
<body>
    @include('home._header')
    <nav class="site-navigation position-relative text-right" role="navigation">
{{--    @include('home._category')--}}
        @section('content')
        İçerik Alanı
        @show

    </nav>
    @include('home._footer')
</body>
</html>
