@extends('layouts.home')
@section('title','User Orders')


@section('description')
@endsection

@section('keywords','boş')

@section('content')
    <div class="overlay" style="background-image: url('{{asset('assets')}}/images/slider_10.jpg');height: 300px">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <p style="margin-top: 150px"><h1 class="heading mb-3 text-white">User Orders</h1></p>
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
                                @include('home.message')
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Treatment Title</th>
                                        <th>Order Date</th>
                                        <th>Price</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $dl)
                                        <tr>
                                            <td>{{$dl->id}}</td>
                                            <td>{{$dl->treatment->title}}</td>
                                            <td>{{$dl->order_date}}</td>
                                            <td>{{$dl->price}}</td>
                                            <td>{{$dl->payment}}</td>
                                            <td>{{$dl->status}}</td>
                                            <td><a href="{{route('user_order_delete',['id'=>$dl->id])}}" onclick="return confirm('Delete! Are you sure ?')"><img src="{{asset('adminassets/icons/trash.png')}}" height="25px"></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="card-header">
                                    <div class="card-title">
                                        <a href="{{route('categoryalltreatments')}}" class="btn btn-black--hover btn-info">Add
                                            Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

