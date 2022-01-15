@extends('layouts.home')

@section('title','Profile Settings')

@section('description')
@endsection

@section('keywords','boş')

@section('content')
    <div class="overlay" style="background-image: url('{{asset('assets')}}/images/add_1.jpg');height: 300px">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <p style="margin-top: 150px">
                    <h1 class="heading mb-3">User Treatment</h1></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 mb-5 border border-2 border-gray-100">

                </div>

                <div class="col-lg-10 ml-auto">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                @include('profile.show')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
