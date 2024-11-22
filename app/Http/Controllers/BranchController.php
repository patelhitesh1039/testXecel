<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function getBranch()
    {$branches = Branch::all();
        return view('admin.viewBranch', compact('branches'));}
    public function branch()
    {

        return view('admin.branch');
    }
    public function insertBranch(Request $request)
    {

        $request->validate([

            'city' => 'required|string',
            'name' => 'required|string',

        ]);
        $branch = new Branch;
        $branch->city = $request->city;
        $branch->name = $request->name;
        $branch->save();

        return redirect()->route('getBranch');
    }
}
