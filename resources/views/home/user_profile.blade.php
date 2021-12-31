<?php
$setting=\App\Http\Controllers\HomeController::getsetting();
?>
@extends('layouts.home')

@section('title','Profile Settings')

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)

@section('content')
                @include('profile.show')
@endsection
