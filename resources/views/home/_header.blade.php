<?php
$parentCategories = \App\Http\Controllers\HomeController::categorylist();
$setting = \App\Http\Controllers\HomeController::getsetting();
?>

<header class="site-navbar light js-sticky-header site-navbar-target" role="banner"
        style="width: 100% ; position: fixed; top: 0px; z-index: inherit;">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <div class="mb-0 site-logo"><a href="{{route('home_index')}}" class="mb-0">DiyetSis
                        <span class="text-primary">.</span> </a></div>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="has-children">
                            <a href="#" class="nav-link"><span class="icon-search"></span></a>
                            <ul class="dropdown">
                                <li class="has-children">
                                    <form action="{{route('gettreatment')}}" method="post" class="nav-link">
                                        @csrf
                                        @livewire('search')
                                        <br>
                                        <button type="submit" class="btn btn-secondary" style="width: 100%"><span class="icon-search"></span></button>
                                    </form>
                                    @livewireScripts
                                </li>
                            </ul>
                        </li>

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
                                <li class="has-children1">
                                    <a href="{{route('categoryalltreatments')}}">All</a>
                                </li>
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
                            @auth
                                <a href="#" class="nav-link">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                                <ul class="dropdown">
                                    <li class="has-children">
                                        <a href="{{route('user_profile')}}" class="nav-link">Profile</a>

                                        <a href="#" class="nav-link">Menu</a>
                                        <ul class="dropdown">
                                            <li class="has-children">
                                                <?php
                                                $userRoles = Auth::user()->role;
                                                ?>
                                                @if($userRoles=='admin' || $userRoles=='dietitian')
                                                    <a href="{{route('user_treatments')}}" class="nav-link">My
                                                        Treatments</a>
                                                    <a href="{{route('user_processes')}}" class="nav-link">My
                                                        Processes</a>
                                                @endif
                                                <a href="{{route('myreviews')}}" class="nav-link">My Reviews</a>
                                                <a href="{{route('user_orders')}}" class="nav-link">My Orders</a>
                                                <a href="{{route('user_appointments')}}" class="nav-link">My
                                                    Appointments</a>
                                                <?php
                                                $userRoles = Auth::user()->role;
                                                ?>
                                                @if($userRoles=='user')
                                                    <a href="{{route('user_processes_user')}}" class="nav-link">My
                                                        Processes</a>
                                                @endif
                                            </li>
                                        </ul>

                                        <a href="{{route('all_logout')}}" class="nav-link">Logout</a>
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
                        <li class="social"><a href="{{$setting->youtube}}" class="nav-link"><span
                                    class="icon-youtube"></span></a></li>
                        <li class="social"><a href="{{$setting->instagram}}" class="nav-link"><span
                                    class="icon-instagram"></span></a></li>
                        <li class="social"><a href="{{$setting->facebook}}" class="nav-link"><span
                                    class="icon-facebook"></span></a></li>
                        <li class="social"><a href="{{$setting->twitter}}" class="nav-link"><span
                                    class="icon-twitter"></span></a></li>
                    </ul>
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
