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
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Review</h6>
                    </div>
                    <div class="card-body">
                            <form role="form" action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <p class="form-control">{{$data->user->name}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <p class="form-control">{{$data->treatment->title}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Answer</label>
                                        <p class="form-control">{{$data->subject}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Review</label>
                                        <p class="form-control">{{$data->review}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Rate</label>
                                        <p class="form-control">{{$data->rate}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" name="status" style="width: 100%">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>Read</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Review</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
