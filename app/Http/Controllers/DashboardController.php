<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('dashboard', compact('about'));
    }
}
