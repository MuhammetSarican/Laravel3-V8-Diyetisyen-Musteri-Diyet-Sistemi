<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Kuşbabalı Mahoni">

    <title>@yield('title')</title>


    {{--Tab Icon--}}
    <link rel="shortcut icon" href="{{asset('adminassets/icons/user.png')}}" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="{{asset('adminassets')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="{{asset('adminassets')}}/stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('adminassets')}}/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top" class="sidebar-toggled">
<div id="wrapper">
    @include('admin._sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        @include('admin._header')

        <div id="content">
            @section('content')
            @show
        </div>
        @section('footer')
            @include('admin._footer')
        @show
    </div>
</div>
</body>
</html>
