<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
class DoctorController extends Controller
{
    //
    public function appointmentRequest()
    {
        $appointments = Appointment::all();
        return view('Doctor.appointmentRequest', compact('appointments'));
    }




}
