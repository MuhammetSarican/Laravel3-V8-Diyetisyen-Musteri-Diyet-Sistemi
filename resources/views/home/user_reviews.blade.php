@extends('layouts.home')


@section('description')
@endsection

@section('keywords','boş')

@section('content')
    <div class="overlay" style="background-image: url('{{asset('assets')}}/images/slider_10.jpg');height: 300px">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <p style="margin-top: 150px"><h1 class="heading mb-3 text-white">User Reviews</h1></p>
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
                        <div class="card-header">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Treatment</th>
                                            <th>Subject</th>
                                            <th>Review</th>
                                            <th>Rate</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                            <tr>
                                                <td>
                                                    {{$rs->id}}
                                                </td>
                                                <td>
                                                    {{$rs->treatment->title}}
                                                </td>
                                                <td>
                                                    {{$rs->subject}}
                                                </td>
                                                <td>
                                                    {{$rs->review}}
                                                </td>
                                                <td>
                                                    {{$rs->rate}}
                                                </td>
                                                <td>
                                                    {{$rs->status}}
                                                </td>
                                                <td>
                                                    {{$rs->created_at}}
                                                </td>

                                                <td><a href="{{route('destroymyreview',['id'=>$rs->id])}}"
                                                       onclick="return confirm('Delete! Are you sure ?')"><img
                                                            src="http://127.0.0.1:8000/adminassets/icons/trash.png"
                                                            height="25px"></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

