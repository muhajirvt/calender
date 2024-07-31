<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $holidays = Holiday::get(['id','name','start_date','end_date']);
        return view('home',compact('holidays'));
    }
}
