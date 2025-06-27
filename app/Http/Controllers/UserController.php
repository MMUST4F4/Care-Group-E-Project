<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cities; 

class UserController extends Controller
{
    //

    public function requestForDoctor(Request $request)
    {
        $user = auth()->user();
        $user->role = 'Requested to become a doctor';
        $user->doctorstatus = 'pending';
        $user->phone = $request->input('phone');
        $user->specialization = $request->input('specialization');
        $user->city = $request->input('city');
        //store the cv file name in database
        
            $cv = $request->file('cv');
            $cvName = time() . '_' . $cv->getClientOriginalName();
            $cv->move(public_path('uploads/doctorcvs'), $cvName);
            $user->cv = $cvName;
       
        $user->experience = $request->input('experience');
        $user->city = $request->citylist;
        $user->save();

        return redirect()->back()->with('success', 'Your request to become a doctor has been submitted successfully.');
    }
   
    
}
// This controller handles user-related actions, such as requesting to become a doctor and retrieving cities.