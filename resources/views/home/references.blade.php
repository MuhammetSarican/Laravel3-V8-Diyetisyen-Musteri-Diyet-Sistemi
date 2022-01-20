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
                <h1 class="heading mb-3 text-white">References</h1>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ml-auto">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            {!!$setting->references!!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
