@extends('layouts.admin')
@section('title','Product List')
<head>

    <!-- Custom styles for this page -->
    <!--<link href="{{asset('adminassets')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">-->

</head>

@section('content')
    <!-- Content Wrapper -->
    Productasınız.
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Product</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{route('admin_product')}}">Home</a> </li>
                            <li class="breadcrumb-item active">Product</li>
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
                        <a href="{{route('admin_product_add')}}" class="btn btn-black--hover btn-info">Add Product</a>
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
                                        <th>Category</th>
                                        <th>Title(s)</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $dl)
                                        <tr>
                                            <td>{{$dl->id}}</td>
                                            <td>{{$dl->category_id}}</td>
                                            <td>{{$dl->title}}</td>
                                            <td>{{$dl->price}}</td>
                                            <td>{{$dl->image}}</td>
                                            <td>{{$dl->status}}</td>
                                            <td><a href="{{route('admin_product_edit',['id'=>$dl->id])}}">Edit</a></td>
                                            <td><a href="{{route('admin_product_delete',['id'=>$dl->id])}}" onclick="return confirm('Delete! Are you sure ?')">Delete</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script src="{{asset('adminassets')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('adminassets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('adminassets')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('adminassets')}}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{asset('adminassets')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('adminassets')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('adminassets')}}/js/demo/datatables-demo.js"></script>
@show



