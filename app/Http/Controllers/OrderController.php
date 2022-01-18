<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Treatment;
use App\Models\User;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\DateTime;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Orders::where('user_id',Auth::id())->get();
//        print_r($datalist);
//        exit();
        return view('home.user_orders',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data=[
            'datalist'=>Treatment::find($id),
            'datalist2'=>User::all(),
        ];
        return view('home.user_orders',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $dt=Treatment::find($id);
        $data=new Orders;
        $data->treatment_id=$id;
        $data->dietitian_id=$dt->user_id;
        $data->order_date=Carbon::now('Europe/Istanbul');
        $data->finish_date=Carbon::now('Europe/Istanbul')->addMonth(3);
        $data->months=$data->finish_date->formatLocalized('%m')-$data->order_date->formatLocalized('%m');
        $data->price=$dt->price;
        $data->total=$dt->price;
        $data->payment=$request->input('payment');
        $data->user_id=Auth::id();
        $data->ip=$_SERVER["REMOTE_ADDR"];
        $data->save();
        return redirect()->route('user_appointment_add',['user_id'=>Auth::id()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $order,$id)
    {
        $data=Orders::find($id);
//        print_r($data);
//        exit();
        $datalist =Category::all();
        return view('home.order_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $order,$id)
    {
        $data=Orders::find($id);
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->status=$request->input('status');
        $data->category_id=$request->input('category_id');
        $data->detail=$request->input('detail');
        if($request->file('image')!=null)
        {
            $data->image=Storage::putFile('images',$request->file('image'));
        }
        $data->price=$request->input('price');
        $data->user_id=Auth::id();
        $data->save();
        return redirect()->route('user_orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $order,$id)
    {
        Orders::destroy($id);
        return back()->with('success','Deleted successfully.');
    }
}
