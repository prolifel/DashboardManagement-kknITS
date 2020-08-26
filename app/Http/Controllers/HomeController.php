<?php

namespace App\Http\Controllers;

use App\CovidProvince;
use App\Post;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $covid_provinces = CovidProvince::all();
        return view('home', compact('covid_provinces'));
    }
}
