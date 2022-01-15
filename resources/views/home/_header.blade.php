<?php
$parentCategories = \App\Http\Controllers\HomeController::categorylist();
$setting= \App\Http\Controllers\HomeController::getsetting();
?>
<header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <div class="mb-0 site-logo"><a href="{{route('home_index')}}" class="mb-0">Diyetisyen: {{--{{\Illuminate\Support\Facades\Auth::user()->name}}--}} <span class="text-primary">.</span> </a></div>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="{{route('home_index')}}" class="nav-link">Home</a></li>

                        <li class="has-children">
                            <a href="#" class="nav-link">Categories</a>
                            <ul class="dropdown">
                                @foreach($parentCategories as $rs)
                                    <li class="has-children">
                                        <a href="#">{{$rs->title}}</a>
                                        <ul class="dropdown">
                                            @if(count($rs->children))
                                                @include('home.categorytree',['children'=>$rs->children])
                                            @endif
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="has-children">
                            <a href="#" class="nav-link">Quick Links</a>
                            <ul class="dropdown">
                                <li class="has-children">
                                    <a href="{{route('home_aboutus')}}" class="nav-link">About Us</a>
                                    <a href="{{route('home_contact')}}" class="nav-link">Contact</a>
                                    <a href="{{route('home_references')}}" class="nav-link">References</a>
                                    <a href="{{route('home_faq')}}" class="nav-link">FAQ</a>
                                </li>
                            </ul>
                        </li>

                        {{--                        Login Section--}}
                        <li class="has-children">
                            {{--                        <img class="img-profile rounded-circle" src="http://127.0.0.1:8000/adminassets/img/undraw_profile.svg">--}}
                            @auth
                                <a href="#" class="nav-link">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                                <ul class="dropdown">
                                    <li class="has-children">
                                        <a href="{{route('user_profile')}}" class="nav-link">Profile</a>
                                        <a href="{{route('all_logout')}}" class="nav-link">Logout</a>
                                        <a href="{{route('user_treatments')}}" class="nav-link">My Treatments</a>
                                        <a href="{{route('myreviews')}}" class="nav-link">My Reviews</a>
                                        <a href="{{route('user_appointments')}}" class="nav-link">Make an Appointment</a>
                                    </li>
                                </ul>
                            @endauth
                            @guest
                                <a href="#" class="nav-link">User</a>
                                <ul class="dropdown">
                                    <li class="has-children">
                                        <a href="/login" class="nav-link">Login</a>
                                        <a href="/register" class="nav-link">Register</a>
                                        <a href="/forgot-password" class="nav-link">Lost Password</a>
                                    </li>
                                </ul>
                            @endguest
                        </li>

{{--                        <form action="{{route('gettreatment')}}" method="post" class="nav-link">--}}
{{--                            @csrf--}}
{{--                            @livewire('search')--}}
{{--                            <input type="submit">--}}
{{--                        </form>--}}
{{--                        @livewireScripts--}}

                        <li class="has-children">
                            <a href="#" class="nav-link">
                                <span class="icon-search"></span></a>
                            <ul class="dropdown-menu">
                                <li class="has-children">

                                </li>
                            </ul></li>

                        <li class="social"><a href="{{$setting->youtube}}" class="nav-link"><span
                                    class="icon-youtube"></span></a></li>
                        <li class="social"><a href="{{$setting->instagram}}" class="nav-link"><span
                                    class="icon-instagram"></span></a></li>
                        <li class="social"><a href="{{$setting->facebook}}" class="nav-link"><span
                                    class="icon-facebook"></span></a></li>
                        <li class="social"><a href="{{$setting->twitter}}" class="nav-link"><span
                                    class="icon-twitter"></span></a></li>
                    </ul>
{{--Search İcon--}}
                    <div class="col-6 d-inline-block ml-md-0 py-3" style="position: relative; top: 3px;">

                    </div>

{{--                    Hide menu--}}
{{--                    <div class="site-mobile-menu">--}}
{{--                        <div class="site-mobile-menu-header">--}}
{{--                            Close Icon--}}
{{--                            <div class="site-mobile-menu-close mt-3">--}}
{{--                                <span class="icon-close2 js-menu-toggle"></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="">--}}
{{--                    </div>--}}
                </nav>
            </div>
            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
                <a href="#" class="site-menu-toggle js-menu-toggle float-right">
                    <span class="icon-menu h3 text-white"></span>
                </a>
            </div>
        </div>
    </div>

</header>
