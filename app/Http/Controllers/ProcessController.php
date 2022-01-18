<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Process::where('dietitian_id',Auth::id())->get();
//               print_r($datalist);
//       exit();
        return view('home.user_process',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tr_id= User::where('role','user')->get();
        $treatment=Treatment::all();
        return view('home.process_add',['dietitian'=>$tr_id,'treatment'=>$treatment]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Process;
        $data->user_id=$request->input('user_id');
        $data->dietitian_id=Auth::id();
        $data->treatment_id=$request->input('treatment_id');
        $data->start_date=$request->input('start_date');
        $data->end_date=$request->input('end_date');
        $data->detail=$request->input('detail');
        $data->save();
        return redirect()->route('user_processes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function show(Process $process)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $process,$id)
    {
        $data=Process::find($id);

        return view('home.process_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Process $process,$id)
    {
        $data=Process::find($id);
        $data->start_date=$request->input('start_date');
        $data->end_date=$request->input('end_date');
        $data->detail=$request->input('detail');
        $data->save();
        return redirect()->route('user_processes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function destroy(Process $process,$id)
    {
        Process::destroy($id);
        return redirect()->back();
    }
}
