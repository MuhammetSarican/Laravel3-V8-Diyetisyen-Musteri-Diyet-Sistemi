@extends('layouts.home')


@section('description')
@endsection

@section('keywords','boş')

@section('content')
    <div class="overlay" style="background-image: url('{{asset('assets')}}/images/add_1.jpg');height: 300px">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <p style="margin-top: 150px"><h1 class="heading mb-3">Add Treatment</h1></p>
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
                        <form role="form" action="{{route('user_appointment_store')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Select a Treatment</label>
                                    <select class="form-control select2" name="treatment_id" style="width: 100%">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <label>Parent</label>--}}
{{--                                    <select class="form-control select2" name="category_id" style="width: 100%">--}}
{{--                                        @foreach($datalist as $rs)--}}
{{--                                            <option value="{{$rs->id}}">--}}
{{--                                                Diyetisyen--}}
{{--                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}--}}
{{--                                            </option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Time</label>
                                    <input type="time" name="time" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Weight</label>
                                    <input type="text" name="weight" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Height</label>
                                    <input type="text" name="height" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mass Index</label>
                                    <input type="text" name="mass_index" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Pulse</label>
                                    <input type="integer" name="pulse" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Note</label>
                                    <input type="integer" name="note" class="form-control">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Create Appointment</button>
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
