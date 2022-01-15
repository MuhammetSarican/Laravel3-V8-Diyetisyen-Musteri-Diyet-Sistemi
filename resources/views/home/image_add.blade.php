@extends('layouts.home')

    <div class="site-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 mb-5 border border-2 border-gray-100">
                    {{--                    @livewire('review',['id'=>$data->id])--}}
                </div>

                <div class="col-lg-10 ml-auto">
                    <div class="card shadow mb-4">
                        <form role="form" action="{{route('admin_image_store',['treatment_id'=>$data->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add Image</button>
                            </div>
                        </form>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title(s)</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $dl)
                                <tr>
                                    <td>{{$dl->treatment_id}}</td>
                                    <td>{{$dl->title}}</td>
                                    <td>
                                        @if($dl->image)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($dl->image)}}" height="50" alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin_image_delete',['id'=>$dl->id,'treatment_id'=>$data->id])}}"
                                           onclick="return confirm('Delete! Are you sure ?')">
                                            <img src="{{asset('adminassets/icons/trash.png')}}" height="25px">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
