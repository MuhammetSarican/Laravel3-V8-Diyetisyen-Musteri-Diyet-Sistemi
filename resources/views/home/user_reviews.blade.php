<div class="card-header">
    <div class="card-title">
        <a href="http://127.0.0.1:8000/admin/treatment/create" class="btn btn-black--hover btn-info">Add
            Treatment</a>
    </div>

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
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
                            {{$rs->treatment_id}}
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
