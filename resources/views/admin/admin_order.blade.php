@extends('layouts.admin')
@section('title','Treatment List')
@section('content')
    <!-- Content Wrapper -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Treatment</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_treatments')}}">Home</a> </li>
                            <li class="breadcrumb-item active">treatment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div id="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <a href="{{route('admin_treatment_add')}}" class="btn btn-black--hover btn-info">Add Treatment</a>
                    </div>

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User Id</th>
                                    <th>Treatment Title</th>
                                    <th>Order Date</th>
                                    <th>Finish Date</th>
                                    <th>Total</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $dl)
                                    <tr>
                                        <td>{{$dl->id}}</td>
                                        <td><a href="{{route('admin_user_show',['id'=>$dl->id])}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">{{$dl->user->name}}</a></td>
                                        <td>{{$dl->treatment->title}}</td>
                                        <td>{{$dl->order_date}}</td>
                                        <td>{{$dl->finish_date}}</td>
                                        <td>{{$dl->total}}</td>
                                        <td>{{$dl->payment}}</td>
                                        <td>{{$dl->status}}</td>
                                        <td><a href="{{route('admin_order_edit',['id'=>$dl->id])}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')"><img src="{{asset('adminassets/icons/edit.png')}}" height="25px"></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection




