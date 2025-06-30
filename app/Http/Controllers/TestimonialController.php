<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestimonialController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // optional photo
        ]);

        $testimonial = new \App\Models\Testimonial();
        $testimonial->name = $request->name;
        $testimonial->message = $request->message;

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('testimonials', 'public');
            $testimonial->photo = $path;
        }

        $testimonial->save();

        return redirect()->back()->with('success', 'Testimonial submitted successfully!');
    }
}
