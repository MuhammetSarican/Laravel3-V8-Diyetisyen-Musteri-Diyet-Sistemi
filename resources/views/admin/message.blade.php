@extends('layouts.admin')
@section('title','Setting Edit')

@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Messages</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_setting')}}">Home</a> </li>
                            <li class="breadcrumb-item active">Messages</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div id="content">
            <div class="card">

                <div class="card-body">
                    <div class="card-body">
                        @foreach($datalist as $rs)
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#maryjane{{$rs->id}}" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="SmTp">
                                    <h8 class="m-0 font-weight text-primary"><h6 class="font-weight-bold">Gönderen:</h6>{{$rs->name}}</h8>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="maryjane{{$rs->id}}" style="">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <p class="form-control">{{$rs->subject}}</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <p class="form-control">{{$rs->email}}</p>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <label>Ip</label>
                                                <p class="form-control">{{$rs->ip}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                                <p class="form-control">{{$rs->phone}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control">{{$rs->message}}</textarea>
                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="{{route('admin_message_edit',['id'=>$rs->id])}}" class="btn btn-primary" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">Edit Message</a>
                                            <a href="{{route('admin_message_delete',['id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Delete! Are you sure ?')">Delete Message</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@section('footer')
@endsection



