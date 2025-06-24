<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\DoctorAvailability;
class DoctorController extends Controller
{
    //
    public function appointmentRequest()
    {
         $appointments = Appointment::all();
    $availabilities = DoctorAvailability::where('doctor_id', auth()->id())->get();
    return view('Doctor.appointmentRequest', compact('appointments', 'availabilities'));
    }




}
