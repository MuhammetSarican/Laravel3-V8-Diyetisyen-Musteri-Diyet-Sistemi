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
                <h1 class="heading mb-6">Contact us</h1>
                <p class="lead text-white">{{--$setting->contact--}}</p>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-6">
                <h1 class="text-left">
                    Contact Form
                </h1>
                @include('home.message')
                <form action="{{route('home_sendmessage')}}" method="post">
                   @csrf
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">First Name</label>
                            <input type="text" id="fname" class="form-control" name="fname">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">Last Name</label>
                            <input type="text" id="lname" class="form-control" name="lname">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="phone">Phone</label>
                            <input type="phone" id="phone" class="form-control" name="phone">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label>
                            <input type="email" id="email" class="form-control" name="email">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Subject</label>
                            <input type="subject" id="subject" class="form-control" name="subject">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..." name="message"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary text-white">
                        </div>
                    </div>


                </form>
            </div>
            <div class="col-lg-3 ml-auto">
                <div class="mb-3">
                    <p class="mb-0 font-weight-bold text-black">Address</p>
                    <p class="mb-4">{{$setting->address}}</p>

                    <p class="mb-0 font-weight-bold text-black">Phone</p>
                    <p class="mb-4"><a href="#">{{$setting->phone}}</a></p>

                    <p class="mb-0 font-weight-bold text-black">Email Address</p>
                    <p class="mb-0"><a href="#">{{$setting->email}}</a></p>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
