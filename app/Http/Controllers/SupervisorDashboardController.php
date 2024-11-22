<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupervisorDashboardController extends Controller
{
    

    public function __construct()
    {

        $this->middleware('role:Supervisor');
    }

    public function index()
    {
        return view('supervisor.dashboard');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}