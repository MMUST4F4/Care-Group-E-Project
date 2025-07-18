<?php

namespace App\Http\Controllers;

use App\Models\complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    //
    public function create()
    {
        return view('User.complaint_create'); // This view contains the form for submitting a complaint
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        complaint::create($request->all());

        return redirect()->back()->with('success', 'Complaint submitted successfully!');
    }
     public function index()
    {
       $complaints = Complaint::all();
    return view('Admin.complainsec', compact('complaints'));
    }
}
