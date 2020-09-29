<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

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

        $pending = Registration::where('status_id',1)->get();
        $approved = Registration::where('status_id',2)->get();
        $rejected = Registration::where('status_id',3)->get();

        return view('home');
    }
}
