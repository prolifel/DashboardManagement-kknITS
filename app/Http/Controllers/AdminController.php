<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserPasswordRequest;
use App\Http\Requests\UserProfileRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $users = User::paginate(5);
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return back()->withStatus(__('Profile successfully created.'));
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->get();
        return view('users.edit', ['user' => $user]);
    }

    public function update(UserProfileRequest $request)
    {
        User::find($request->id)->update($request->all());
        return back()->withStatus(__('Profile successfully updated.'));
    }

    public function password(UserPasswordRequest $request)
    {
        User::find($request->id)->update(['password' => Hash::make($request->get('password'))]);
        return back()->withPasswordStatus(__('Password successfully updated.'));
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return back()->with('success','User successfully deleted');
    }
}
