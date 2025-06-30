<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cities;
use App\Models\Appointment;

class AdminController extends Controller
{
    //
     public function widget()
    {
        $doctors = User::where('role', 'doctor')->get();
        return view('Admin.widget', compact('doctors'));
    }

    public function getdoctors()
    {
        $doctors = User::where('role', 'Requested to become a doctor')->get();
        return view('Admin.doctors', compact('doctors'));
    }
  public function doctorAccept($doctor)
  {
     $doc = User::find($doctor);
     $doc->doctorstatus = 'accepted';
        $doc->role = 'doctor';
        $doc->save();

     return redirect()->back()->with('success', 'Doctor request accepted successfully.');
  }
  public function doctorReject($doctor)
  {
     $doc = User::find($doctor);
     $doc->doctorstatus = 'rejected';
        $doc->role = 'user';
        $doc->save();

     return redirect()->back()->with('success', 'Doctor request rejected successfully.');
  }
  public function approvedDoctors()
  {
    $doctors = User::where('role', 'doctor')->get();
    return view('Admin.approveddoctors', compact('doctors'));
  }
  public function addcity(Request $req)
  {
   $table = new cities();
   $table->cityname = $req->cityname;
   $table->save();
   return redirect()->back()->with('success','City has been added');
  }

  public function getCities()
  {
      $cities = cities::all();
      return view('Admin.cities', compact('cities'));
  }

  public function deleteCity($city)
  {
      $city = cities::findOrFail($city);
      $city->delete();
      return redirect()->back()->with('success', 'City deleted successfully.');
  }
  public function index()
{
    $appointments = Appointment::all();
    return view('Admin.index', compact('appointments'));
}

}
