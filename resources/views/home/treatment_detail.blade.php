<!doctype html>
<html lang="en">
<head>
    <title>{{$data->title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Kuşbabalı Mahoni">
    {{--Tab Icon--}}
    <link rel="shortcut icon" href="{{asset('assets/icons/diet.png')}}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">
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
<div class="site-section bg-primary">
    <h1 class="heading mb-3 text-white text-center" style="margin-bottom: 100px">Treatment &amp; {{$data->title}}</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-5 mb-md-0">
                <div class="slideshow-container">
                    <?php
                    $i = 0;
                    $j = 0;
                    ?>
                    @foreach($image as $im)
                        <?php
                        $i++;
                        ?>
                        <div class=" mySlides">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($im->image)}}" alt="Image"
                                 class="img-fluid" style="height:350px;object-fit: cover">
                        </div>
                    @endforeach
                    <div style="display: none">
                        @for(;$j<$i;$j++)
                            <span href="#peterparker" class="dot fas fa-angle-up"></span>
                        @endfor
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-lg-9 ml-auto">
                <div class="section-heading">

                    <div class="card shadow mb-4">
                        <!-- Card Content - Collapse -->
                        <div class="" id="socialmedia" style="">
                            <div class="card-body">
                                <div class="form-group">
                                    <p class="text-black">{!! $data->detail !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mb-5 border border-2 border-gray-100">
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#review" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                       role="button" aria-expanded="false" aria-controls="generalinformation">
                        <h6 class="m-0 font-weight-bold text-secondary text-left">Reviews </h6>
                    </a>
                    <div class="text-left" id="review" style="min-height: 300px">
                        <div class="card-body">
                            @if($review=='[]')
                                No Reviews Yet...
                            @endif
                            @foreach($review as $rew)
                                <?php
//                                $avgrew = \App\Http\Controllers\HomeController::avrgreview($data->id);
//                                $countrew = \App\Http\Controllers\HomeController::countreview($rew->treatment_id);
//                                    print_r($countrew);
//                                    exit();
                                    ?>
                                <label class="text-primary ">{{$rew->user->name}}</label>
                                <label class="text-black text-right">
                                    <div class="text-right">
                                        @if($rew->rate)
                                            @for($i=0;$i<$rew->rate;$i++)
                                                <span class="icon-star" type="radio"></span>
                                            @endfor
                                        @endif
                                    </div>
                                </label>
{{--                                @foreach($countrew as $avg)--}}
{{--                                    {{$avg}}--}}
{{--                                    @endforeach--}}
                                <p class="text-black font-italic" style="height: auto">“{{ $rew->review}}”</p>
                                    <p class="text-right text-danger">{{$rew->subject}}</p>
                                    <p class="text-left text-secondary font-italic" style="font-size: 12px">{{$rew->created_at}}</p>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
                <p class="text-black mb-5"><strong class="h6">“We care your reviews”</strong></p>
            </div>
            <div class="col-lg-5 border ml-auto">
                @livewire('review',['id'=>$data->id])
            </div>
        </div>
    </div>
</div>
@section('footer')
    <script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery-ui.js"></script>
    <script src="{{asset('assets')}}/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.countdown.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{asset('assets')}}/js/aos.js"></script>
    <script src="{{asset('assets')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.animateNumber.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.fancybox.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.sticky.js"></script>
    <script src="{{asset('assets')}}/js/isotope.pkgd.min.js"></script>


    <script src="{{asset('assets')}}/js/main.js"></script>
@show

