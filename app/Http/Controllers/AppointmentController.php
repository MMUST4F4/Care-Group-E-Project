<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;


class AppointmentController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'patient_name'      => 'required|string|max:255',
            'patient_email'     => 'required|email',
            'appointment_date'  => 'required|date',
            'department'        => 'required|string',
            'phone_number'      => 'required|string|max:20',
            'reason_for_visit'  => 'nullable|string',
        ]);

        Appointment::create([
            'patient_name'      => $request->patient_name,
            'patient_email'     => $request->patient_email,
            'appointment_date'  => $request->appointment_date,
            'department'        => $request->department,
            'phone_number'      => $request->phone_number,
            'reason_for_visit'  => $request->reason_for_visit,
        ]);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }
}

    

