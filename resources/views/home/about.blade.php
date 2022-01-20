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
                <h1 class="heading mb-3">About Us</h1>
                <p class="lead text-white mb-5">{{$setting->aboutus}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
