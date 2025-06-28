<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\cities;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    
    public function index()
    {
        $latestNews = News::orderBy('created_at', 'desc')->take(3)->get();
        $cities = cities::get();
        return view('index', compact('latestNews','cities'));
    }
}
