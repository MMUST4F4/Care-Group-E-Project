<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\DoctorAvailability;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class DoctorController extends Controller
{
    //
    public function appointmentRequest()
    {
         $appointments = Appointment::where('doctor_id',Auth::user()->id)->get();
    $availabilities = DoctorAvailability::where('doctor_id', Auth::user()->id)->get();
    return view('Doctor.appointmentRequest', compact('appointments', 'availabilities'));
    }

    public function profile()
{
    $doctor = auth()->user();
    return view('Doctor.profile', compact('doctor'));
}

public function updateProfile(Request $request)
{
    $doctor = auth()->user();

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $doctor->id,
        'phone' => 'nullable|string|max:20',
        'specialization' => 'nullable|string|max:255',
        'experience' => 'nullable|string|max:255',
        'city' => 'required|string|max:255',
        // Add more fields as needed
    ]);

    $doctor->update($request->only(['name', 'email', 'phone', 'specialization', 'experience', 'city']));

    return redirect()->route('doctor.profile')->with('success', 'Profile updated successfully!');
}




}


