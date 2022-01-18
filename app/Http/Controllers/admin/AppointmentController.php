<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Appointment::all();
//               print_r($datalist);
//       exit();
        return view('admin.appointment',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist=Category::all();
        return view('admin.appointment_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Appointment;
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->status=$request->input('status');
        $data->category_id=$request->input('category_id');
        $data->detail=$request->input('detail');
        $data->image=Storage::putFile('image',$request->file('image'));
        $data->price=$request->input('price');
        $data->user_id=Auth::id();
        $data->save();
        return redirect()->route('admin_appointment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment,$id)
    {
        $data=Appointment::find($id);
//        print_r($data);
//        exit();
        $datalist =Appointment::all();
        return view('admin.appointment_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment,$id)
    {
        $data=Appointment::find($id);
        $data->note=$request->input('note');
        $data->status=$request->input('status');
        $data->save();
        return redirect()->back()->with('success','Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment,$id)
    {
        Appointment::destroy($id);
        return redirect()->route('admin_appointment');
    }
}
