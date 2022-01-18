@extends('layouts.home')
@section('title','Process Edit')


@section('description')
@endsection

@section('keywords','boş')

@section('content')
    <div class="overlay" style="background-image: url('{{asset('assets')}}/images/slider_10.jpg');height: 300px">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <p style="margin-top: 150px"><h1 class="heading mb-3 text-white">Process Edit</h1></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 mb-5 border border-2 border-gray-100">
                    <ul>
                        <li><h3>Menü</h3></li>

                    </ul>
                </div>

                <div class="col-lg-10 ml-auto">
                    <div class="card shadow mb-4">
                        <form role="form" action="{{route('user_process_update',['id'=>$data->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <p class="form-control text-left">{{$data->user->name}}</p>
                                </div>
                                <div class="form-group">
                                    <label>Treatment Title</label>
                                    <p class="form-control text-left">{{$data->treatment->title}}</p>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label>Start Date</label>
                                        <input type="date" value="{{$data->start_date}}" name="start_date"
                                               class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label>End Date</label>
                                        <input type="date" value="{{$data->end_date}}" name="end_date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Detail</label>
                                    <textarea id="summernote" class="form-control"
                                              name="detail">{{$data->detail}}</textarea>
                                    <script>
                                        $(document).ready(function () {
                                            $('#summernote').summernote();
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Process</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@section('footer')
@endsection
