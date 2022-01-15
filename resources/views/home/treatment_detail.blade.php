@extends('layouts.home')


@section('description')
@endsection

@section('keywords','boş')

@section('content')
    <div class="overlay" style="background-image: url('{{asset('assets')}}/images/add_1.jpg');height: 300px">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <p style="margin-top: 150px">
                    <h1 class="heading mb-3">Add Treatment</h1></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-5 mb-md-0">
                    <div class="slideshow-container">
                        @foreach($image as $im)
                            <div class=" mySlides">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($im->image)}}" alt="Image"
                                     class="img-fluid" style="height:250px;object-fit: cover">
                            </div>
                        @endforeach
                        <div style="position: fixed">
                            <span class="dot"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 ml-auto">
                    <div class="section-heading">
                        <h2 class="heading mb-3 text-white">Treatment &amp; {{$data->title}}</h2>

                        <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
                            <a href="#socialmedia" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                               role="button" aria-expanded="false" aria-controls="generalinformation">
                                <h6 class="m-0 font-weight-bold text-primary">Social Media</h6>
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse" id="socialmedia" style="">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Youtube</label>
                                        <p class="text-black" style="height: 150px">{!! $data->detail !!}Lorem ipsum
                                            dolor sit amet, consectetur adipisicing elit. Similique amet nostrum facere
                                            hic! Inventore cumque ipsam eum, sit sequi illum.</p>
                                        <p class="mb-4 text-black">Optio ex ullam eveniet magnam molestiae laborum,
                                            dignissimos dolorum ipsam minus, ipsum vel illo aut molestias suscipit
                                            voluptatem hic voluptatibus!</p>
                                        <p class="text-black mb-5"><strong class="h3">“We care for elderly
                                                people”</strong></p>
                                        <p><a href="#" class="btn btn-black">Learn More</a></p></div>
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
                        <div class="text-left" id="review" style="">
                            <div class="card-body">
                                @foreach($review as $rew)
                                    <?php
                                    //$avgrew=\App\Http\Controllers\HomeController::avrgreview($data->id);
                                    //$countrew=\App\Http\Controllers\HomeController::countreview($rew->treatment_id);
                                    ?>
                                    <label class="text-primary ">{{$rew->user->name}}</label>
                                    <label style="text-align: right">{{$rew->created_at}}</label>
                                    <label class="text-black" for="review">
                                        <div class="-grin-stars">
                                            {{--                                        @if($rew->rate)--}}
                                            {{--                                        @for($i=0;$i<$rew->rate;$i++)--}}
                                            {{--                                        <i class="icon-star" type="radio"/><label></label>--}}
                                            {{--                                        @endfor--}}
                                        </div>
                                    </label>
                                    <p class="text-black font-italic" style="height: auto">“{{ $rew->review}}”</p>
                                    <p class="text-right text-danger">{{$rew->subject}}</p>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <p class="text-black mb-5"><strong class="h6">“We care your reviews”</strong></p>
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="card shadow mb-4">
                                            @livewire('review',['id'=>$data->id])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

