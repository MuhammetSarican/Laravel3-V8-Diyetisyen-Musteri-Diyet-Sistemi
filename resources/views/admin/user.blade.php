@extends('layouts.admin')
@section('title','User List')
@section('content')
    <!-- Main Content -->
    <div id="content">
        <div class="card">
            <div class="card-header">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Users</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Roles</th>
                                <th colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $dl)
                                <tr>
                                    <td>{{$dl->id}}</td>
                                    <td>
                                        @if($dl->profile_photo_path)
                                            <img
                                                src="{{\Illuminate\Support\Facades\Storage::url($dl->profile_photo_path)}}"
                                                height="50" style="border-radius: 10px" alt="">
                                        @endif
                                    </td>
                                    <td>{{$dl->name}}</td>
                                    <td>{{$dl->email}}</td>
                                    <td>{{$dl->phone}}</td>
                                    <td>{{$dl->address}}</td>
                                    <td>
                                        @foreach($dl->roles as $row)
                                            {{$row->name}}
                                        @endforeach
                                        ,
                                        <a href="{{route('user_roles',['id'=>$dl->id])}}"
                                           onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')"><img
                                                src="{{asset('adminassets/icons/plus.png')}}" height="15px"></a>
                                    </td>
                                    <td><a href="{{route('admin_user_edit',['id'=>$dl->id])}}"
                                           onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')"><img
                                                src="{{asset('adminassets/icons/edit.png')}}" height="25px"></a></td>
                                    <td><a href="{{route('admin_user_delete',['id'=>$dl->id])}}"
                                           onclick="return confirm('Delete! Are you sure ?')"><img
                                                src="{{asset('adminassets/icons/trash.png')}}" height="25px"></a></td>
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




