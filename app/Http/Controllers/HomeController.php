<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function services($slung)
    {
        $Service = DB::table('services')->where('slung',$slung)->get();
        return view('service_single', compact('Service'));
    }

    public function portfolio($slung)
    {
        $Portfolio = DB::table('portfolios')->where('slung',$slung)->get();
        return view('portfolio_single', compact('Portfolio'));
    }


}
