<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function supervisor()
    {$supervisors = Supervisor::latest()->paginate('5');
        return view('admin.supervisor', compact('supervisors'))->with('i', (request()->input('page', 1) - 1) * 5);}
    public function create()
    {
        $branches = Branch::all();
        return view('admin.Createsupervisor', compact('branches'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:supervisors,email',
            'password' => 'required|min:6',
            'branch_id' => 'required|exists:branches,id',
        ]);

        $supervisor = new Supervisor();
        $supervisor->name = $request->name;
        $supervisor->email = $request->email;
        $supervisor->password = bcrypt($request->password);
        $supervisor->branch_id = $request->branch_id;
        $supervisor->save();

        return redirect()->route('supervisor')->with('success', 'Supervisor created successfully');
    }
}
