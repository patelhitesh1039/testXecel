<?php

namespace App\Http\Controllers;

use App\Models\SupervisorLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SupervisorLoginController extends Controller
{
    public function showRegister()
    {
        return view('supervisor.register');
    }

    public function RegisterSup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:supervisor_logins',
            'password' => 'required|string|min:8',
            'mobile' => 'required|string|max:15|unique:supervisor_logins',
        ]);

        $supervisor = new SupervisorLogin;
        $supervisor->name = $request->name;
        $supervisor->email = $request->email;
        $supervisor->password = Hash::make($request->password);
        $supervisor->mobile = $request->mobile;
        $supervisor->save();

        return redirect('/')->with('success', 'Supervisor registered successfully!');
    }

    public function showLogin()
    {
        return view('supervisor.login');
    }

    public function loginSup(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $supervisor = SupervisorLogin::where('email', $request->email)->first();

        if ($supervisor && Hash::check($request->password, $supervisor->password)) {
         

            return redirect()->route('supervisor.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid email or password.']);
    }

    public function index()
    {
        return view('supervisor.dashboard');
    }

}