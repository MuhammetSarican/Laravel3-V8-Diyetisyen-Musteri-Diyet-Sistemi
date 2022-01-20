@extends('layouts.admin')
@section('title','Messages')
@section('content')
    <!-- Main Content -->
    <div id="content">
        <div class="card">
            <div class="card-header">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Messages</h6>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        @foreach($datalist as $rs)
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#maryjane{{$rs->id}}" class="d-block card-header py-3 collapsed"
                                   data-toggle="collapse" role="button" aria-expanded="false" aria-controls="SmTp">
                                    <h8 class="m-0 font-weight text-primary"><h6 class="font-weight-bold">
                                            Gönderen:</h6>{{$rs->name}}</h8>
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
                                            <a href="{{route('admin_message_edit',['id'=>$rs->id])}}"
                                               class="btn btn-primary"
                                               onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">Edit
                                                Message</a>
                                            <a href="{{route('admin_message_delete',['id'=>$rs->id])}}"
                                               class="btn btn-danger"
                                               onclick="return confirm('Delete! Are you sure ?')">Delete Message</a>
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
