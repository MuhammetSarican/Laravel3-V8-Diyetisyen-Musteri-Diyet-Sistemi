<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view('admin.index');
    }
    public static function getmessage()
    {
        $data=Message::all();
        return $data;
    }
    //
}
