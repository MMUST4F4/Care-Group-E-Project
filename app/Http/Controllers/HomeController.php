<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\cities;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;

class HomeController extends Controller
{
    //
    
    public function index()
    {
        $latestNews = News::orderBy('created_at', 'desc')->take(3)->get();
        $cities = cities::get();
        $doctors = User::where('role', 'doctor')->get();
        
        $testimonials = \App\Models\Testimonial::orderBy('created_at', 'desc')->take(3)->get();
        return view('index', compact('latestNews','cities','doctors','testimonials'));
    }
   
}
