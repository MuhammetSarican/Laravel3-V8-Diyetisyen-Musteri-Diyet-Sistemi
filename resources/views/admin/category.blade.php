@extends('layouts.admin')
@section('title','Category List')
<head>

    <!-- Custom styles for this page -->
    <link href="{{asset('adminassets')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Categories</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a> </li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div id="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="card-title">Category List</h5>
                    </div>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12 col-md-6">--}}
{{--                                        <div class="dataTables_length" id="dataTable_length">--}}
{{--                                            <label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">--}}
{{--                                                    <option value="10">10</option>--}}
{{--                                                    <option value="25">25</option>--}}
{{--                                                    <option value="50">50</option>--}}
{{--                                                    <option value="100">100</option>--}}
{{--                                                </select>--}}
{{--                                                entries--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-12 col-md-6">--}}
{{--                                        <div id="dataTable_filter" class="dataTables_filter">--}}
{{--                                            <label>--}}
{{--                                                Search:--}}
{{--                                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 61px;">Position</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 49px;">Office</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Age</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Start date</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 67px;">Salary</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Name</th>
                                                <th rowspan="1" colspan="1">Position</th>
                                                <th rowspan="1" colspan="1">Office</th>
                                                <th rowspan="1" colspan="1">Age</th>
                                                <th rowspan="1" colspan="1">Start date</th>
                                                <th rowspan="1" colspan="1">Salary</th>
                                            </tr>
                                            </tfoot><tbody>
                                                @foreach($datalist as $dl)
                                                    <tr>
                                                        <td class="sorting_1">{{$dl->id}}</td>
                                                        <td>{{$dl->parent_id}}</td>
                                                        <td>{{$dl->title}}</td>
                                                        <td>{{$dl->status}}</td>
                                                        <td>Edit</td>
                                                        <td>Delete</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12 col-md-5">--}}
{{--                                        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">--}}
{{--                                            Showing 1 to 10 of 57 entries--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">--}}
{{--                                            <ul class="pagination">--}}
{{--                                                <li class="paginate_button page-item previous disabled" id="dataTable_previous">--}}
{{--                                                    <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>--}}
{{--                                                </li><li class="paginate_button page-item active">--}}
{{--                                                    <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="paginate_button page-item ">--}}
{{--                                                    <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="paginate_button page-item ">--}}
{{--                                                    <a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="paginate_button page-item ">--}}
{{--                                                    <a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="paginate_button page-item ">--}}
{{--                                                    <a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>--}}
{{--                                                </li><li class="paginate_button page-item ">--}}
{{--                                                    <a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="paginate_button page-item next" id="dataTable_next">--}}
{{--                                                    <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
{{--                            <div class="card-body">--}}

{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="container-fluid">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Content Wrapper -->
{{--    <a class="scroll-to-top rounded" href="#page-top" style="display: none;">--}}
{{--        <i class="fas fa-angle-up"></i>--}}
{{--    </a>--}}
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



