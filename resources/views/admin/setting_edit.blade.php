@extends('layouts.admin')
@section('title','Setting Edit')
@section('javascript')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    @endsection
@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Edit Setting</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_setting')}}">Home</a> </li>
                            <li class="breadcrumb-item active">Edit Setting</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div id="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Setting</h6>
                    </div>
                    <div class="card-body">
                            <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">


                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                        <a href="#collapseCardExample" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                                            <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse" id="collapseCardExample" style="">
                                            <div class="card-body">
                                                <input type="hidden" name="id" value="{{$data->id}}" class="form-control">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Keywords</label>
                                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                        <a href="#collapseCardExample" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                                            <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse" id="collapseCardExample" style="">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Company</label>
                                                    <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Fax</label>
                                                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                        <a href="#collapseCardExample" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                                            <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse" id="collapseCardExample" style="">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Smtp Server</label>
                                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Smtp Email</label>
                                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Smtp Password</label>
                                                    <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Smtp Port</label>
                                                    <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                        <a href="#collapseCardExample" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                                            <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse" id="collapseCardExample" style="">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Instagram</label>
                                                    <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Twitter</label>
                                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Youtube</label>
                                                    <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                        <a href="#collapseCardExample" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                                            <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse" id="collapseCardExample" style="">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Aboutus</label>
                                                    <textarea id="aboutus" name="aboutus" class="form-control">{{$data->aboutus}}</textarea>
                                                    <label>Contact</label>
                                                    <textarea id="contact" name="contact" class="form-control">{{$data->contact}}</textarea>
                                                    <label>References</label>
                                                    <textarea id="references" name="references" class="form-control">{{$data->references}}</textarea>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#aboutus').summernote();
                                                            $('#contact').summernote();
                                                            $('#references').summernote();
                                                        });
                                                    </script>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control select2" name="status" style="width: 100%">
                                                        <option selected="selected">{{$data->status}}</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Setting</button>
                                </div>
                            </form>
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



