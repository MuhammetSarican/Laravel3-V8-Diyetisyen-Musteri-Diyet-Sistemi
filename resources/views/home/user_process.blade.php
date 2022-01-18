@extends('layouts.home')
@section('title','User Processes')


@section('description')
@endsection

@section('keywords','boş')

@section('content')
    <div class="overlay" style="background-image: url('{{asset('assets')}}/images/slider_10.jpg');height: 300px">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <p style="margin-top: 150px"><h1 class="heading mb-3 text-white">User Processes</h1></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 mb-5 border border-2 border-gray-100">

                </div>

                <div class="col-lg-10 ml-auto">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                @include('home.message')
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Dietitian Id</th>
                                        <th>User Name</th>
                                        <th>Treatment Title</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $dl)
                                        <tr>
                                            <td>{{$dl->id}}</td>
                                            <td>{{$dl->dietitian_id}}</td>
                                            <td>{{$dl->user->name}}</td>
                                            <td>{{$dl->treatment->title}}</td>
                                            <td>{{$dl->start_date}}</td>
                                            <td>{{$dl->end_date}}</td>
                                            <td>{{$dl->status}}</td>
                                            <td><a href="{{route('user_process_edit',['id'=>$dl->id])}}"><img src="{{asset('adminassets/icons/edit.png')}}" height="25px"></a></td>
                                            <td><a href="{{route('user_process_delete',['id'=>$dl->id])}}" onclick="return confirm('Delete! Are you sure ?')"><img src="{{asset('adminassets/icons/trash.png')}}" height="25px"></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="card-header">
                                    <div class="card-title">
                                        <a href="{{route('user_process_add')}}" class="btn btn-black--hover btn-info">Create a Process</a>
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
