<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Orders;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Appointment::where('user_id',Auth::id())->get();
        return view('home.user_appointments',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist=Orders::where('user_id',Auth::id())->get();
        return view('home.user_appointment_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rs=Orders::where('user_id',Auth::id())->first();
        $data=new Appointment;
        $total=$request->input('total');
        $data->order_id=$request->input('order_id');
        $data->dietitian_id=$rs->dietitian_id;
        $data->date=$request->input('date');
        $data->time=$request->input('time');
        $data->weight=$request->input('weight');
        $data->height=$request->input('height');
        $data->mass_index=(($data->weight*10000)/($data->height*$data->height));
        $data->pulse=$request->input('pulse');
        $data->ip=$_SERVER["REMOTE_ADDR"];
        $data->user_id=Auth::id();
        $data->save();
        return redirect()->route('user_appointments',['total'=>$total]);
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
        $datalist =Category::all();
        return view('home.appointment_edit',['data'=>$data,'datalist'=>$datalist]);
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
        //
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
        return redirect()->route('user_appointments');
    }
}
