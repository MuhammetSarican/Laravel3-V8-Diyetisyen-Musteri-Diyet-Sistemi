<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Review;
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
    public function countreview($id)
    {
        return Review::where('treatment_id',$id)->count();
    }
    public function avrgreview($id)
    {
        return Review::where('treatment_id',$id)->average('rate');
    }
    public function index()
    {
        $setting=Setting::first();
        $slider=Treatment::Select('title','image','price')->get();
        $last=Treatment::Select('id','title','image','price','created_at')->limit(4)->orderByDesc('created_at')->inRandomOrder()->get();
        $review=Review::Select('id','user_id','subject','review','created_at')->limit(3)->orderByDesc('created_at')->inRandomOrder()->get();

        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'last'=>$last,
            'review'=>$review,
        ];
        return view('home.index',$data);
    }
    public function login(){
        return view('admin.login');
    }
    public function treatment($id)
    {
        $data=Treatment::find($id);
        $images=Image::where('treatment_id',$id)->get();
        $review=Review::where('treatment_id',$id)->get();
        $data=[
            'review'=>$review,
            'data'=>$data,
            'image'=>$images,
        ];
        return view('home.treatment_detail',$data);
    }
    public function gettreatment(Request $request)
    {
        $search=$request->input('search');
        $count=Treatment::where('title','like','%'.$search.'%')->get()->count();
        if ($count==1)
        {
            $data=Treatment::where('title',$request->input('search'))->first();
            return redirect()->route('treatment',['id'=>$data->id]);
        }
        else
        {
            return redirect()->route('treatmentlist',['search'=>$search]);
        }
    }
    public function treatmentlist($search)
    {
        $datalist=Treatment::where('title','like','%'.$search.'%')->get();
        return view('home.search_treatments',['search'=>$search,'datalist'=>$datalist]);
    }
    public function categoryalltreatments()
    {
        $datalist=Treatment::all();
        $data=Category::all();
        return view('home.category_all_treatments',['data'=>$data,'datalist'=>$datalist]);
    }
    public function categorytreatments($id)
    {
        $datalist=Treatment::where('category_id',$id)->get();
        $data=Category::find($id);
        return view('home.category_treatments',['data'=>$data,'datalist'=>$datalist]);
    }
    public function aboutus(){
        return view('home.about');
    }

    public function references(){
        return view('home.references');
    }

    public function faq(){
        $data=Faq::all()->sortBy('position');
        $FAQ=[
            'data'=>$data,
        ];
        return view('home.faq',$FAQ);

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
        return back();
    }
}

