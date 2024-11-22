<?php

namespace App\Http\Controllers;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

}