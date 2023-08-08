<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CrateUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    public function create()
    {
        $users = User::all();

        return view('user.create', compact('users'));
    }

    public function store(CrateUserRequest $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);

        return redirect()->route('users.index');
    }

    public function edit(Request $request)
    {
        $user = User::find($request['id']);

        return view('user.edit', compact('user'));
    }

    public function update(CrateUserRequest $request)
    {
        $user = User::find($request['id']);

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();

        return redirect()->route('users.index');
    }

    public function delete(Request $request)
    {
        $user = User::find($request['id']);
        $user->delete();

        return redirect()->route('users.index');
    }

}
