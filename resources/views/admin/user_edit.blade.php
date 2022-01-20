<html>
<head>
    <link rel="shortcut icon" href="{{asset('adminassets/icons/user.png')}}" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="{{asset('adminassets')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="{{asset('adminassets')}}/stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('adminassets')}}/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<!-- Content Wrapper -->

    <!-- Main Content -->
    <div id="content">
        <div class="card">
            <div class="card-header">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
                </div>
                <div class="card-body">
                    @include('home.message')
                    <form role="form" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{$data->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="{{$data->email}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="{{$data->address}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Roles</label>
                                @foreach($data->roles as $row)
                                    <p class="form-control">
                                    {{$row->name}}
                                    </p>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                                @if($data->profile_photo_path)
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($data->profile_photo_path)}}"
                                         height="200" style="border-radius: 10px" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Name</th>
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
                                <td>
                                    @foreach($dl->roles as $row)
                                                {{$row->name}},
                                        @endforeach
                                </td>
                                <td><a href="{{route('admin_user_edit',['id'=>$dl->id])}}">
                                        <img src="{{asset('adminassets/icons/edit.png')}}" height="25px"></a></td>
                                <td><a href="{{route('admin_user_delete',['id'=>$dl->id])}}"
                                       onclick="return confirm('Delete! Are you sure ?')">
                                        <img src="{{asset('adminassets/icons/trash.png')}}" height="25px"></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


</body>
</html>
