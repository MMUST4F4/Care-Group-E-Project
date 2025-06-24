<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoctorAvailability;
use App\Models\User;

class DoctorAvailabilityController extends Controller
{
    //

   
     public function store(Request $request)
    {
        $request->validate([
            'day_of_week' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        DoctorAvailability::updateOrCreate(
            [
                'doctor_id' => auth()->id(),
                'day_of_week' => $request->day_of_week,
            ],
            [
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'is_available' => $request->has('is_available'),
            ]
        );

        return redirect()->back()->with('success', 'Availability updated!');
    }
}
