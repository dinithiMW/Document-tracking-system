<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
       /* $chart = Charts::database(Scand::all(),'line', 'highcharts')
        ->setResponsive(false)
        
        ->setWidth(0)
        ->groupBy('branch');
        
        return view('home',['chart'=>$chart]);*/
        return view('home');
    }
}
