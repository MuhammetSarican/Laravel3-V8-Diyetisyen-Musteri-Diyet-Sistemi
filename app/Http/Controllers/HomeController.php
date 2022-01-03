<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function getsetting()
    {
        return Setting::first();
    }
    public function index()
    {
        $setting=Setting::first();
        $slider=Treatment::Select('title','image','price')->get();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
        ];
        return view('home.index',$data);
    }
    public function login(){
        return view('admin.login');
    }

    public function aboutus(){
        return view('home.about');
    }

    public function references(){
        return view('home.references');
    }

    public function faq(){
        $slider=Treatment::Select('title','image','price')->get();
        $data=[
            'slider'=>$slider,

        ];
        return view('home.faq',$data);

    }

    public function contact(){
        return view('home.contact');
    }

    public function sendmessage(Request $request){
        $data=new Message;
        $data->ip=$_SERVER["REMOTE_ADDR"];
        $data->name=$request->input('fname')." ".$request->input('lname');
        $data->phone=$request->input('phone');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();
        return redirect()->route('home_contact')->with('success','Mesajınız iletilmiştir, Teşekkür ederiz.');
    }

    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $kullanici=$request->only('email','password');
            if(Auth::attempt($kullanici)){
                print_r($kullanici);
                $request->session()->regenerate();
                return redirect('/admin')/*->intended('admin')*/;
            }
            return back()->withErrors(['email'=>'The provided credentials do not match our records']);
        }
        else {
            return view('admin/login');
        }
    }
    public function logout(Request $veri){
        Auth::logout();
        $veri->session()->invalidate();
        $veri->session()->regenerateToken();
        return redirect('/login');
    }
}

