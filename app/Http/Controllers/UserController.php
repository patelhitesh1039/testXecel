<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUser()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }
    public function UserIndex()
    {
        return view('admin.useradd');
    }
    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:supervisors,email',
            'password' => 'required|min:6',
        ]);

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->save();

        return redirect()->route('getUser')->with('success', 'Supervisor created successfully');
    }
}
