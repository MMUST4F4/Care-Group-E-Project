<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    
    public function index()
    {
        $latestNews = News::orderBy('created_at', 'desc')->take(3)->get();
        return view('index', compact('latestNews'));
    }
}
