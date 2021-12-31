<?php
$setting=\App\Http\Controllers\HomeController::getsetting();
?>
@extends('layouts.home')

@section('title',$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)

@section('content')
<div class="slide-item overlay" style="background-image: url('{{asset('assets')}}/images/slider-2.jpg')">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6 align-self-center">
                <h1 class="heading mb-3">References</h1>
                <p class="lead text-white mb-5">{!!$setting->references!!}</p>
                <p><a href="#" class="btn btn-primary">Get In Touch</a></p>
            </div>
        </div>
    </div>
</div>




<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5">
                <div class="testimonial text-center">
                    <img src="{{asset('assets')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                    <blockquote>
                        <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                        <cite class="author">Elizabeth Anderson, Senior</cite>
                    </blockquote>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5">
                <div class="testimonial text-center">
                    <img src="{{asset('assets')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                    <blockquote>
                        <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                        <cite class="author">Elizabeth Anderson, Senior</cite>
                    </blockquote>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5">
                <div class="testimonial text-center">
                    <img src="{{asset('assets')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                    <blockquote>
                        <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                        <cite class="author">Elizabeth Anderson, Senior</cite>
                    </blockquote>
                </div>
            </div>



            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5">
                <div class="testimonial text-center">
                    <img src="{{asset('assets')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                    <blockquote>
                        <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                        <cite class="author">Elizabeth Anderson, Senior</cite>
                    </blockquote>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5">
                <div class="testimonial text-center">
                    <img src="{{asset('assets')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                    <blockquote>
                        <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                        <cite class="author">Elizabeth Anderson, Senior</cite>
                    </blockquote>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5">
                <div class="testimonial text-center">
                    <img src="{{asset('assets')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                    <blockquote>
                        <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                        <cite class="author">Elizabeth Anderson, Senior</cite>
                    </blockquote>
                </div>
            </div>


        </div>
    </div>
</div>




<div class="site-section bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 mb-5 mb-md-0">
                <img src="{{asset('assets')}}/images/about.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 col-lg-5 ml-auto">
                <div class="section-heading">
                    <h2 class="heading mb-3 text-white">Senior &amp; Elder Home Care Center</h2>

                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique amet nostrum facere hic! Inventore cumque ipsam eum, sit sequi illum.</p>
                    <p class="mb-4 text-white">Optio ex ullam eveniet magnam molestiae laborum, dignissimos dolorum ipsam minus, ipsum vel illo aut molestias suscipit voluptatem hic voluptatibus!</p>
                    <p class="text-white mb-5"><strong class="h3">&ldquo;We care for elderly people&rdquo;</strong></p>
                    <p><a href="#" class="btn btn-white">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
