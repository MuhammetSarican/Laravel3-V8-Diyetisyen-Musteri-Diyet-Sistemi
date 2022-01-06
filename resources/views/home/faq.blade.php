@extends('layouts.home')
@section('content')
    <div class="slide-item " style="background-image: url('{{asset('assets')}}/images/faq_4.jpg')">


    <div class="site-section">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 align-self-center text-center">
                <h1 class="heading mb-3">FAQ's</h1>
{{--                <p class="lead text-white mb-5">{{$setting->aboutus}}</p>--}}
{{--                <p><a href="#" class="btn btn-primary">Get In Touch</a></p>--}}
            </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    @foreach($data as $rs)

                    <div class="mb-4" style="background-color: #FFFFFF">
                        <!-- Card Header - Accordion -->
                        <a href="#faq{{$rs->id}}" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                           role="button" aria-expanded="false" aria-controls="generalinformation">
                            <h6 class="m-0 font-weight-bold text-black text-center">{{$rs->question}}</h6>
                        </a>
                        <div class="text-left collapse" id="faq{{$rs->id}}" style="">
                            <div class="card-body">
                                    <p class="text-black font-italic" style="height: auto">{!! $rs->answer !!}</p>
                                    <hr>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

