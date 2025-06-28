<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cities; 
use App\Models\User; 

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
        $user->starttime = $request->starttime;
        $user->stoptime = $request->stoptime;
        $user->save();

        return redirect()->back()->with('success', 'Your request to become a doctor has been submitted successfully.');
    }
   
    public function getdoctorsoncity(Request $req)
    {
        $cityname = $req->input('cname');
        $usersofcity = User::where('city',$cityname)->where('role','doctor')->get();
       return response()->json($usersofcity);

    }
}
// This controller handles user-related actions, such as requesting to become a doctor and retrieving cities.