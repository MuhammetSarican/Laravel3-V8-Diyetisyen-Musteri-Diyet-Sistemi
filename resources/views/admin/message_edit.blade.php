<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Messages</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="content">
        <div class="card">

            <div class="card-body">
                <form role="form" action="{{route('admin_message_update',['id'=>$datalist->id])}}" method="post" >
                    @csrf
                    <div class="card-body">
                        @include('home.message')
                        <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
                            <div class="d-block card-header py-3 collapsed"  aria-expanded="false" aria-controls="SmTp">
                                <h8 class="m-0 font-weight text-secondary"><h6 class="font-weight-bold">Gönderen:</h6>"{{$datalist->name}}"</h8>
                            </div>
                            <!-- Card Content - Collapse -->
                            <div   style="">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <p class="form-control">{{$datalist->subject}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <p class="form-control">{{$datalist->email}}</p>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <label>Ip</label>
                                            <p class="form-control">{{$datalist->ip}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                            <p class="form-control">{{$datalist->phone}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <p class="form-control">{{$datalist->message}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Admin Notu</label>
                                        <textarea class="form-control" name="not" value="Notunuzu giriniz...">{{$datalist->note}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<link rel="shortcut icon" href="{{asset('adminassets/icons/user.png')}}" type="image/x-icon" >

<!-- Custom fonts for this template-->
<link href="{{asset('adminassets')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="{{asset('adminassets')}}/stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('adminassets')}}/css/sb-admin-2.min.css" rel="stylesheet">
