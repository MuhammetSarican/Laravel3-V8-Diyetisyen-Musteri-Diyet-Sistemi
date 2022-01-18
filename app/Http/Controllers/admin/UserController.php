<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = User::all();
//               print_r($datalist);
//       exit();
        return view('admin.user', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::all();
        return view('admin.user_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,$id)
    {
        $data = User::find($id);
//        print_r($data);
//        exit();
        $datalist = User::all();
        $role = Role::all()->sortBy('name');
        return view('admin.user_show', ['data' => $data, 'datalist' => $datalist,'role'=>$role]);
    }

    public function userroles(User $user, $id)
    {
        $data = User::find($id);
        $datalist = Role::all()->sortBy('name');
        return view('admin.user_roles', ['data' => $data, 'datalist' => $datalist]);
    }

    public function userrolesstore(Request $request, User $user, $id)
    {
        $user = User::find($id);
        $roleid = $request->input('roleid');
        $user->roles()->attach($roleid);
        return redirect()->back()->with('success', 'Updated Successfully.');
    }

    public function userrolesdelete(User $user, $userid, $roleid)
    {
        $user = User::find($userid);
        $user->roles()->detach($roleid);
        return redirect()->back()->with('success', 'Deleted Successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $data = User::find($id);
//        print_r($data);
//        exit();
        $datalist = User::all();
        return view('admin.user_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
        $data = User::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        $data->role = $request->input('role');
        if ($request->file('image') != null) {
            $data->profile_photo_path = Storage::putFile('profile-photos', $request->file('image'));
        }
        $data->save();
        return redirect()->back()->with('success', 'Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, $id)
    {
        User::destroy($id);
        return redirect()->route('admin_users');
    }
}
