<html>
<head>
    <title>Image Gallery</title>
    <link href="{{asset('adminassets')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="{{asset('adminassets')}}/stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('adminassets')}}/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">{{$data->title}}</h6>
</div>
<div class="card-body">
    <form role="form" action="{{route('admin_image_store',['treatment_id'=>$data->id])}}" method="post"
          enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add Image</button>
        </div>
    </form>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title(s)</th>
            <th>Image</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($images as $dl)
            <tr>
                <td>{{$dl->treatment_id}}</td>
                <td>{{$dl->title}}</td>
                <td>
                    @if($dl->image)
                        <img src="{{\Illuminate\Support\Facades\Storage::url($dl->image)}}" height="50" alt="">
                    @endif
                </td>
                <td>
                    <a href="{{route('admin_image_delete',['id'=>$dl->id,'treatment_id'=>$data->id])}}"
                       onclick="return confirm('Delete! Are you sure ?')">
                        <img src="{{asset('adminassets/icons/trash.png')}}" height="25px">
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
