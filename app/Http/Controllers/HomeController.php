<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Mobileuser;


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

        $buylist = Mobileuser:: all();
        $buycount = $buylist->count();
        

       
        return view('home', ['buycount'=> $buycount] );
    }

}
