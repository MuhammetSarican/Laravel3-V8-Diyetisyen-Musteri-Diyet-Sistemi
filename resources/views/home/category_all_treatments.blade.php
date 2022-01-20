@extends('layouts.home')
@section('title','All Treatments')


@section('description')
@endsection

@section('content')
    <div class="slide-item overlay" style="background-image: url('{{asset('assets')}}/images/slider-2.jpg')">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <h1 class="heading mb-3 text-white">All Treatments</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                @foreach($datalist as $rs)
                    <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="service" style="height: 100%">
                            <a href="{{route('treatment',['id'=>$rs->id])}}" class="d-block">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="Image" style="height: 250px;object-fit: cover" class="img-bg img-fluid">
                            </a>
                            <div class="service-inner" style="height: 150px">
                                <h3>{{$rs->title}}</h3>
                            </div>
                            <a href="{{route('user_order_add',['id'=>$rs->id])}}" class="btn btn-primary text-white" style="margin-bottom: 2px">{{$rs->price}}&nbsp;$</a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
