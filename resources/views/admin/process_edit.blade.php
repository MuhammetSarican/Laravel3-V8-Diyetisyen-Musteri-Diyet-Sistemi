<html>
<head>
    <link rel="shortcut icon" href="{{asset('adminassets/icons/user.png')}}" type="image/x-icon" >

    <!-- Custom fonts for this template-->
    <link href="{{asset('adminassets')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="{{asset('adminassets')}}/stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('adminassets')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>
<body>
        <!-- Main Content -->
        <div id="content">
            <div class="card">
                <div class="card-header">

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Process</h6>
                    </div>
                    <div class="card-body">
                        @include('home.message')
                            <form role="form" action="{{route('admin_process_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Id</label>
                                        <p class="form-control text-left">{{$data->id}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <p class="form-control text-left">{{$data->user->name}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Dietitian Id</label>
                                        <p class="form-control text-left">{{$data->treatment->user->name}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <p class="form-control text-left">{{$data->start_date}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label>End Date</label>
                                        <p class="form-control text-left">{{$data->end_date}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Detail</label>
                                        <extended class="form-control text-left">{!! $data->detail !!}</extended>
                                    </div>
                                    <div class="form-group">
                                        <label>Admin Note</label>
                                        <textarea id="summernote" class="form-control" name="note">{{$data->note}}</textarea>
                                        <script>
                                            $(document).ready(function() {
                                                $('#summernote').summernote();
                                            });
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" name="status" style="width: 100%">
                                            <option selected="selected">{{$data->status}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Process</button>
                                </div>
                            </form>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Note</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $dl)
                                <tr>
                                    <td>{{$dl->id}}</td>
                                    <td>{!! $dl->note !!}</td>
                                    <td>{{$dl->status}}</td>
                                    <td><a href="{{route('admin_process_edit',['id'=>$dl->id])}}"><img src="{{asset('adminassets/icons/edit.png')}}" height="25px"></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
