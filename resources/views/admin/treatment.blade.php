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
                            <li class="breadcrumb-item active">Treatment</li>
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
                        <h6 class="m-0 font-weight-bold text-primary">Treatments</h6>
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
                                    <th>Image Gallery</th>
                                    <th>Status</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $dl)
                                    <tr>
                                        <td>{{$dl->id}}</td>
                                        <td>
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($dl->category,$dl->category->title)}}
                                        </td>
                                        <td><a href="{{route('treatment',['id'=>$dl->id])}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">{{$dl->title}}</a></td>
                                        <td>{{$dl->price}}</td>
                                        <td>
                                            @if($dl->image)
                                                <img src="{{\Illuminate\Support\Facades\Storage::url($dl->image)}}" height="50" alt="">
                                                @endif
                                        </td>
                                        <td><a href="{{route('admin_image_add',['treatment_id'=>$dl->id])}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')"><img src="{{asset('adminassets/icons/image-gallery.png')}}" height="25px"></a></td>
                                        <td>{{$dl->status}}</td>
                                        <td><a href="{{route('admin_treatment_edit',['id'=>$dl->id])}}"><img src="{{asset('adminassets/icons/edit.png')}}" height="25px"></a></td>
                                        <td><a href="{{route('admin_treatment_delete',['id'=>$dl->id])}}" onclick="return confirm('Delete! Are you sure ?')"><img src="{{asset('adminassets/icons/trash.png')}}" height="25px"></a></td>
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




